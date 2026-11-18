<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors\Support;

use BackedEnum;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\UsPrivacyMinors\UsPrivacyMinorsPlugin;
use JeffersonGoncalves\UsPrivacyMinors\Models\GuardianLink;

class Labels
{
    public static function get(string $key): string
    {
        return __("filament-us-privacy-minors::filament-us-privacy-minors.{$key}");
    }

    /**
     * @param  list<\UnitEnum&BackedEnum>  $cases
     * @return array<string, string>
     */
    public static function options(array $cases, string $group): array
    {
        return collect($cases)
            ->mapWithKeys(fn (BackedEnum $case): array => [(string) $case->value => static::get("{$group}.{$case->value}")])
            ->all();
    }

    public static function subject(?Model $subject, int|string|null $fallbackId = null): string
    {
        if ($subject === null) {
            return '#'.$fallbackId;
        }

        $title = $subject->getAttribute(UsPrivacyMinorsPlugin::get()->getSubjectTitleAttribute());

        return filled($title) ? "{$title} (#{$subject->getKey()})" : '#'.$subject->getKey();
    }

    /** Searchable select over the plugin's subject model. */
    public static function subjectSelect(string $name): Select
    {
        $plugin = UsPrivacyMinorsPlugin::get();
        $model = $plugin->getSubjectModel();
        $title = $plugin->getSubjectTitleAttribute();

        return Select::make($name)
            ->searchable()
            ->required()
            ->getSearchResultsUsing(fn (string $search): array => $model::query()
                ->where($title, 'like', "%{$search}%")
                ->limit(50)
                ->get()
                ->mapWithKeys(fn (Model $subject): array => [$subject->getKey() => static::subject($subject)])
                ->all())
            ->getOptionLabelUsing(fn (int|string $value): string => static::subject($model::query()->find($value), $value));
    }

    public static function ageColor(int $age): string
    {
        return match (true) {
            $age < (int) config('us-privacy-minors.parent_age', 13) => 'danger',
            $age < 18 => 'warning',
            default => 'success',
        };
    }

    public static function linkStatus(GuardianLink $link): string
    {
        return match (true) {
            $link->revoked_at !== null => 'revoked',
            $link->verified_at !== null => 'active',
            default => 'pending',
        };
    }

    public static function statusColor(string $status): string
    {
        return match ($status) {
            'active', 'lifted' => 'success',
            'pending', 'appealed' => 'warning',
            'revoked' => 'gray',
            default => 'danger',
        };
    }
}
