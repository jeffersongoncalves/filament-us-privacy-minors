<?php

return [
    'assurances' => [
        'label' => 'Age check',
        'plural_label' => 'Age checks',
    ],
    'opt_ins' => [
        'label' => 'Minor consent',
        'plural_label' => 'Minors\' consents',
    ],
    'guardians' => [
        'label' => 'Guardian link',
        'plural_label' => 'Guardian links',
    ],
    'fields' => [
        'subject' => 'Account',
        'age' => 'Age at the check',
        'method' => 'Method',
        'reliable' => 'Reliable',
        'not_reliable' => 'Not reliable',
        'provider' => 'Provider',
        'assured_at' => 'Checked at',
        'expires_at' => 'Valid until',
        'never' => 'No expiry',
        'minor' => 'Minor',
        'guardian' => 'Parent or guardian',
        'relationship' => 'Relationship',
        'verified' => 'Guardian verified',
        'status' => 'Status',
        'verified_at' => 'Verified at',
        'created_at' => 'Created at',
        'authorized_by' => 'Given by',
        'opted_in_at' => 'Given at',
        'revoked_at' => 'Withdrawn at',
    ],
    'filters' => [
        'valid' => 'Still valid',
        'under_18' => 'Under 18',
        'active' => 'Active',
    ],
    'methods' => [
        'self_declaration' => 'Self-declaration',
        'os_signal' => 'Operating system signal',
        'store_signal' => 'App store signal',
        'document' => 'Document',
        'facial_estimation' => 'Facial age estimation',
        'verifiable_credential' => 'Verifiable credential',
        'guardian' => 'Stated by the guardian',
    ],
    'authorized_by' => [
        'consumer' => 'The minor (13 or over)',
        'parent' => 'Parent or guardian',
    ],
    'status' => [
        'pending' => 'Pending verification',
        'active' => 'Active',
        'revoked' => 'Revoked',
    ],
    'help' => [
        'verified' => 'Only confirm after a reasonable check that this person is the parent or guardian of the minor. Under 13, only this person can consent for the minor (COPPA).',
        'revoke' => 'Consents this person gave stay recorded; withdraw them in Minors\' consents if they should stop counting.',
        'revoke_opt_in' => 'Targeted advertising and sale of this minor\'s data stop being allowed.',
    ],
    'actions' => [
        'verify' => 'Verify guardian',
        'revoke' => 'Revoke link',
        'revoke_opt_in' => 'Withdraw consent',
    ],
    'notifications' => [
        'verified' => 'Guardian verified.',
        'revoked' => 'Link revoked.',
        'opt_in_revoked' => 'Consent withdrawn.',
    ],
];
