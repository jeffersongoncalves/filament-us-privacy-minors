<?php

return [
    'assurances' => [
        'label' => 'Weryfikacja wieku',
        'plural_label' => 'Weryfikacje wieku',
    ],

    'opt_ins' => [
        'label' => 'Zgoda małoletniego',
        'plural_label' => 'Zgody małoletnich',
    ],

    'guardians' => [
        'label' => 'Powiązanie z opiekunem',
        'plural_label' => 'Powiązania z opiekunami',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Wiek w chwili weryfikacji',
        'method' => 'Metoda',
        'reliable' => 'Wiarygodna',
        'not_reliable' => 'Niewiarygodna',
        'provider' => 'Dostawca',
        'assured_at' => 'Zweryfikowano',
        'expires_at' => 'Ważna do',
        'never' => 'Bez wygaśnięcia',
        'minor' => 'Małoletni',
        'guardian' => 'Rodzic lub opiekun',
        'relationship' => 'Pokrewieństwo',
        'verified' => 'Opiekun zweryfikowany',
        'status' => 'Status',
        'verified_at' => 'Zweryfikowano',
        'created_at' => 'Utworzono',
        'authorized_by' => 'Udzielona przez',
        'opted_in_at' => 'Udzielona dnia',
        'revoked_at' => 'Wycofana dnia',
    ],

    'filters' => [
        'valid' => 'Nadal ważne',
        'under_18' => 'Poniżej 18',
        'active' => 'Aktywne',
    ],

    'methods' => [
        'self_declaration' => 'Oświadczenie własne',
        'os_signal' => 'Sygnał systemu operacyjnego',
        'store_signal' => 'Sygnał sklepu z aplikacjami',
        'document' => 'Dokument',
        'facial_estimation' => 'Szacowanie wieku na podstawie twarzy',
        'verifiable_credential' => 'Weryfikowalne poświadczenie',
        'guardian' => 'Podany przez opiekuna',
    ],

    'authorized_by' => [
        'consumer' => 'Małoletni (13 lat lub więcej)',
        'parent' => 'Rodzic lub opiekun',
    ],

    'status' => [
        'pending' => 'Oczekuje na weryfikację',
        'active' => 'Aktywne',
        'revoked' => 'Odwołane',
    ],

    'help' => [
        'verified' => 'Potwierdź dopiero po rozsądnym sprawdzeniu, że ta osoba jest rodzicem lub opiekunem małoletniego. Poniżej 13 lat tylko ta osoba może wyrazić zgodę za małoletniego (COPPA).',
        'revoke' => 'Zgody udzielone przez tę osobę pozostają zapisane; wycofaj je w Zgodach małoletnich, jeśli mają przestać obowiązywać.',
        'revoke_opt_in' => 'Reklama ukierunkowana i sprzedaż danych tego małoletniego przestają być dozwolone.',
    ],

    'actions' => [
        'verify' => 'Zweryfikuj opiekuna',
        'revoke' => 'Odwołaj powiązanie',
        'revoke_opt_in' => 'Wycofaj zgodę',
    ],

    'notifications' => [
        'verified' => 'Opiekun zweryfikowany.',
        'revoked' => 'Powiązanie odwołane.',
        'opt_in_revoked' => 'Zgoda wycofana.',
    ],
];
