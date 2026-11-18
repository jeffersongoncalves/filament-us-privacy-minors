<?php

use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\AgeAssurances\Pages\ListAgeAssurances;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks\GuardianLinkResource;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks\Pages\CreateGuardianLink;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks\Pages\ListGuardianLinks;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\OptIns\Pages\ListOptIns;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacyMinors\UsPrivacyMinorsPlugin;
use JeffersonGoncalves\UsPrivacy\Facades\UsPrivacy;
use JeffersonGoncalves\UsPrivacyMinors\Enums\AssuranceMethod;
use JeffersonGoncalves\UsPrivacyMinors\Facades\UsPrivacyMinors;
use JeffersonGoncalves\UsPrivacyMinors\Models\GuardianLink;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
    $this->child = TestUser::create(['name' => 'Emma']);
    $this->mother = TestUser::create(['name' => 'Anna']);
});

it('lists age checks with age and method, and filters those under 18', function () {
    $child = UsPrivacyMinors::assure($this->child, 12, AssuranceMethod::StoreSignal);
    $adult = UsPrivacyMinors::assure($this->mother, 40, AssuranceMethod::Document);

    Livewire::test(ListAgeAssurances::class)
        ->assertCanSeeTableRecords([$child, $adult])
        ->assertSee('Emma (#2)')
        ->assertSee('App store signal')
        ->filterTable('under_18', true)
        ->assertCanSeeTableRecords([$child])
        ->assertCanNotSeeTableRecords([$adult]);
});

it('links a verified parent, who can then opt in for a child under 13', function () {
    UsPrivacyMinors::assure($this->child, 12, AssuranceMethod::Document);

    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->mother->id, 'relationship' => 'mother', 'verified' => true])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(GuardianLink::sole()->relationship)->toBe('mother')
        ->and(UsPrivacyMinors::hasGuardian($this->child))->toBeTrue();

    UsPrivacyMinors::optIn($this->child, GuardianLink::sole());

    expect(UsPrivacyMinors::allows($this->child, UsPrivacy::state('CO')))->toBeTrue();
});

it('does not link someone to themselves', function () {
    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->child->id])
        ->call('create')
        ->assertHasFormErrors(['guardian_id' => 'different']);
});

it('verifies and revokes a link', function () {
    $link = UsPrivacyMinors::link($this->child, $this->mother);

    Livewire::test(ListGuardianLinks::class)
        ->assertSee('Pending verification')
        ->callTableAction('verify', $link);

    expect($link->fresh()->isActive())->toBeTrue();

    Livewire::test(ListGuardianLinks::class)->callTableAction('revoke', $link);

    expect($link->fresh()->revoked_at)->not->toBeNull();
});

it('lists opt-ins and revokes them', function () {
    UsPrivacyMinors::assure($this->child, 14, AssuranceMethod::StoreSignal);
    $optIn = UsPrivacyMinors::optIn($this->child);

    Livewire::test(ListOptIns::class)
        ->assertCanSeeTableRecords([$optIn])
        ->assertSee('The minor (13 or over)')
        ->callTableAction('revoke', $optIn);

    expect(UsPrivacyMinors::allows($this->child, UsPrivacy::state('CO')))->toBeFalse();
});

it('applies the fluent plugin options', function () {
    UsPrivacyMinorsPlugin::get()->navigationGroup('US')->subjectTitleAttribute('email');

    expect(GuardianLinkResource::getNavigationGroup())->toBe('US')
        ->and(UsPrivacyMinorsPlugin::get()->getSubjectModel())->toBe(TestUser::class);
});
