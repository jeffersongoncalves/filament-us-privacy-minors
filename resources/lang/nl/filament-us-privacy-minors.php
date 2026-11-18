<?php

return [
    'assurances' => [
        'label' => 'Leeftijdscontrole',
        'plural_label' => 'Leeftijdscontroles',
    ],

    'opt_ins' => [
        'label' => 'Toestemming van minderjarige',
        'plural_label' => 'Toestemmingen van minderjarigen',
    ],

    'guardians' => [
        'label' => 'Koppeling met voogd',
        'plural_label' => 'Koppelingen met voogden',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Leeftijd bij de controle',
        'method' => 'Methode',
        'reliable' => 'Betrouwbaar',
        'not_reliable' => 'Niet betrouwbaar',
        'provider' => 'Aanbieder',
        'assured_at' => 'Gecontroleerd op',
        'expires_at' => 'Geldig tot',
        'never' => 'Verloopt niet',
        'minor' => 'Minderjarige',
        'guardian' => 'Ouder of voogd',
        'relationship' => 'Relatie',
        'verified' => 'Voogd geverifieerd',
        'status' => 'Status',
        'verified_at' => 'Geverifieerd op',
        'created_at' => 'Aangemaakt op',
        'authorized_by' => 'Gegeven door',
        'opted_in_at' => 'Gegeven op',
        'revoked_at' => 'Ingetrokken op',
    ],

    'filters' => [
        'valid' => 'Nog geldig',
        'under_18' => 'Onder 18',
        'active' => 'Actief',
    ],

    'methods' => [
        'self_declaration' => 'Zelfverklaring',
        'os_signal' => 'Signaal van het besturingssysteem',
        'store_signal' => 'Signaal van de app store',
        'document' => 'Identiteitsdocument',
        'facial_estimation' => 'Leeftijdsschatting via gezicht',
        'verifiable_credential' => 'Verifieerbaar bewijs',
        'guardian' => 'Opgegeven door de voogd',
    ],

    'authorized_by' => [
        'consumer' => 'De minderjarige (13 of ouder)',
        'parent' => 'Ouder of voogd',
    ],

    'status' => [
        'pending' => 'Verificatie in afwachting',
        'active' => 'Actief',
        'revoked' => 'Ingetrokken',
    ],

    'help' => [
        'verified' => 'Bevestig alleen na een redelijke controle dat deze persoon de ouder of voogd van de minderjarige is. Onder 13 kan alleen deze persoon toestemming geven voor de minderjarige (COPPA).',
        'revoke' => 'Toestemmingen die deze persoon gaf blijven vastgelegd; trek ze in bij Toestemmingen van minderjarigen als ze niet meer mogen tellen.',
        'revoke_opt_in' => 'Gerichte reclame en verkoop van de gegevens van deze minderjarige zijn niet langer toegestaan.',
    ],

    'actions' => [
        'verify' => 'Voogd verifiëren',
        'revoke' => 'Koppeling intrekken',
        'revoke_opt_in' => 'Toestemming intrekken',
    ],

    'notifications' => [
        'verified' => 'Voogd geverifieerd.',
        'revoked' => 'Koppeling ingetrokken.',
        'opt_in_revoked' => 'Toestemming ingetrokken.',
    ],
];
