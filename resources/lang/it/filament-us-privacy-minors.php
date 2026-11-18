<?php

return [
    'assurances' => [
        'label' => 'Verifica dell\'età',
        'plural_label' => 'Verifiche dell\'età',
    ],

    'opt_ins' => [
        'label' => 'Consenso del minore',
        'plural_label' => 'Consensi dei minori',
    ],

    'guardians' => [
        'label' => 'Collegamento con il tutore',
        'plural_label' => 'Collegamenti con i tutori',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Età al controllo',
        'method' => 'Metodo',
        'reliable' => 'Affidabile',
        'not_reliable' => 'Non affidabile',
        'provider' => 'Fornitore',
        'assured_at' => 'Verificata il',
        'expires_at' => 'Valida fino al',
        'never' => 'Nessuna scadenza',
        'minor' => 'Minore',
        'guardian' => 'Genitore o tutore',
        'relationship' => 'Parentela',
        'verified' => 'Tutore verificato',
        'status' => 'Stato',
        'verified_at' => 'Verificato il',
        'created_at' => 'Creato il',
        'authorized_by' => 'Dato da',
        'opted_in_at' => 'Dato il',
        'revoked_at' => 'Revocato il',
    ],

    'filters' => [
        'valid' => 'Ancora valide',
        'under_18' => 'Sotto i 18',
        'active' => 'Attivo',
    ],

    'methods' => [
        'self_declaration' => 'Autodichiarazione',
        'os_signal' => 'Segnale del sistema operativo',
        'store_signal' => 'Segnale dello store di app',
        'document' => 'Documento',
        'facial_estimation' => 'Stima facciale dell\'età',
        'verifiable_credential' => 'Credenziale verificabile',
        'guardian' => 'Indicata dal tutore',
    ],

    'authorized_by' => [
        'consumer' => 'Il minore (13 anni o più)',
        'parent' => 'Genitore o tutore',
    ],

    'status' => [
        'pending' => 'Verifica in attesa',
        'active' => 'Attivo',
        'revoked' => 'Revocato',
    ],

    'help' => [
        'verified' => 'Conferma solo dopo una verifica ragionevole che questa persona è il genitore o il tutore del minore. Sotto i 13 anni, solo questa persona può dare il consenso per il minore (COPPA).',
        'revoke' => 'I consensi dati da questa persona restano registrati; revocali in Consensi dei minori se non devono più valere.',
        'revoke_opt_in' => 'La pubblicità mirata e la vendita dei dati di questo minore non sono più consentite.',
    ],

    'actions' => [
        'verify' => 'Verifica tutore',
        'revoke' => 'Revoca collegamento',
        'revoke_opt_in' => 'Revoca il consenso',
    ],

    'notifications' => [
        'verified' => 'Tutore verificato.',
        'revoked' => 'Collegamento revocato.',
        'opt_in_revoked' => 'Consenso revocato.',
    ],
];
