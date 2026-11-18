<?php

return [
    'assurances' => [
        'label' => 'Vérification d\'âge',
        'plural_label' => 'Vérifications d\'âge',
    ],

    'opt_ins' => [
        'label' => 'Consentement d\'un mineur',
        'plural_label' => 'Consentements des mineurs',
    ],

    'guardians' => [
        'label' => 'Lien avec un responsable légal',
        'plural_label' => 'Liens avec des responsables légaux',
    ],

    'fields' => [
        'subject' => 'Compte',
        'age' => 'Âge lors de la vérification',
        'method' => 'Méthode',
        'reliable' => 'Fiable',
        'not_reliable' => 'Non fiable',
        'provider' => 'Fournisseur',
        'assured_at' => 'Vérifiée le',
        'expires_at' => 'Valide jusqu\'au',
        'never' => 'Sans expiration',
        'minor' => 'Mineur',
        'guardian' => 'Parent ou tuteur',
        'relationship' => 'Lien de parenté',
        'verified' => 'Responsable vérifié',
        'status' => 'Statut',
        'verified_at' => 'Vérifié le',
        'created_at' => 'Créé le',
        'authorized_by' => 'Donné par',
        'opted_in_at' => 'Donné le',
        'revoked_at' => 'Retiré le',
    ],

    'filters' => [
        'valid' => 'Encore valides',
        'under_18' => 'Moins de 18 ans',
        'active' => 'Actif',
    ],

    'methods' => [
        'self_declaration' => 'Autodéclaration',
        'os_signal' => 'Signal du système d\'exploitation',
        'store_signal' => 'Signal de la boutique d\'applications',
        'document' => 'Pièce d\'identité',
        'facial_estimation' => 'Estimation faciale de l\'âge',
        'verifiable_credential' => 'Attestation vérifiable',
        'guardian' => 'Déclarée par le responsable',
    ],

    'authorized_by' => [
        'consumer' => 'Le mineur (13 ans ou plus)',
        'parent' => 'Parent ou tuteur',
    ],

    'status' => [
        'pending' => 'Vérification en attente',
        'active' => 'Actif',
        'revoked' => 'Révoqué',
    ],

    'help' => [
        'verified' => 'Ne confirmez qu\'après une vérification raisonnable que cette personne est le parent ou le tuteur du mineur. Avant 13 ans, seule cette personne peut consentir pour le mineur (COPPA).',
        'revoke' => 'Les consentements donnés par cette personne restent enregistrés ; retirez-les dans Consentements des mineurs s\'ils ne doivent plus compter.',
        'revoke_opt_in' => 'La publicité ciblée et la vente des données de ce mineur ne sont plus autorisées.',
    ],

    'actions' => [
        'verify' => 'Vérifier le responsable',
        'revoke' => 'Révoquer le lien',
        'revoke_opt_in' => 'Retirer le consentement',
    ],

    'notifications' => [
        'verified' => 'Responsable vérifié.',
        'revoked' => 'Lien révoqué.',
        'opt_in_revoked' => 'Consentement retiré.',
    ],
];
