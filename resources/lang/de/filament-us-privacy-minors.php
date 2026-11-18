<?php

return [
    'assurances' => [
        'label' => 'Altersprüfung',
        'plural_label' => 'Altersprüfungen',
    ],

    'opt_ins' => [
        'label' => 'Einwilligung Minderjähriger',
        'plural_label' => 'Einwilligungen Minderjähriger',
    ],

    'guardians' => [
        'label' => 'Verknüpfung mit Erziehungsberechtigten',
        'plural_label' => 'Verknüpfungen mit Erziehungsberechtigten',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Alter bei der Prüfung',
        'method' => 'Methode',
        'reliable' => 'Zuverlässig',
        'not_reliable' => 'Nicht zuverlässig',
        'provider' => 'Anbieter',
        'assured_at' => 'Geprüft am',
        'expires_at' => 'Gültig bis',
        'never' => 'Kein Ablauf',
        'minor' => 'Minderjährige Person',
        'guardian' => 'Elternteil oder Vormund',
        'relationship' => 'Beziehung',
        'verified' => 'Erziehungsberechtigung geprüft',
        'status' => 'Status',
        'verified_at' => 'Geprüft am',
        'created_at' => 'Erstellt am',
        'authorized_by' => 'Erteilt von',
        'opted_in_at' => 'Erteilt am',
        'revoked_at' => 'Widerrufen am',
    ],

    'filters' => [
        'valid' => 'Noch gültig',
        'under_18' => 'Unter 18',
        'active' => 'Aktiv',
    ],

    'methods' => [
        'self_declaration' => 'Selbstauskunft',
        'os_signal' => 'Betriebssystem-Signal',
        'store_signal' => 'App-Store-Signal',
        'document' => 'Ausweisdokument',
        'facial_estimation' => 'Gesichtsbasierte Altersschätzung',
        'verifiable_credential' => 'Überprüfbarer Nachweis',
        'guardian' => 'Von Erziehungsberechtigten angegeben',
    ],

    'authorized_by' => [
        'consumer' => 'Die minderjährige Person (ab 13)',
        'parent' => 'Elternteil oder Vormund',
    ],

    'status' => [
        'pending' => 'Prüfung ausstehend',
        'active' => 'Aktiv',
        'revoked' => 'Widerrufen',
    ],

    'help' => [
        'verified' => 'Erst nach einer angemessenen Prüfung bestätigen, dass diese Person Elternteil oder Vormund ist. Unter 13 kann nur diese Person für die minderjährige Person einwilligen (COPPA).',
        'revoke' => 'Einwilligungen dieser Person bleiben erfasst; widerrufen Sie sie unter Einwilligungen Minderjähriger, wenn sie nicht mehr gelten sollen.',
        'revoke_opt_in' => 'Gezielte Werbung und Verkauf der Daten dieser minderjährigen Person sind dann nicht mehr erlaubt.',
    ],

    'actions' => [
        'verify' => 'Erziehungsberechtigung bestätigen',
        'revoke' => 'Verknüpfung widerrufen',
        'revoke_opt_in' => 'Einwilligung widerrufen',
    ],

    'notifications' => [
        'verified' => 'Erziehungsberechtigung bestätigt.',
        'revoked' => 'Verknüpfung widerrufen.',
        'opt_in_revoked' => 'Einwilligung widerrufen.',
    ],
];
