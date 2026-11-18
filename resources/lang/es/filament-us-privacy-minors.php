<?php

return [
    'assurances' => [
        'label' => 'Verificación de edad',
        'plural_label' => 'Verificaciones de edad',
    ],

    'opt_ins' => [
        'label' => 'Consentimiento de menor',
        'plural_label' => 'Consentimientos de menores',
    ],

    'guardians' => [
        'label' => 'Vínculo con tutor',
        'plural_label' => 'Vínculos con tutores',
    ],

    'fields' => [
        'subject' => 'Cuenta',
        'age' => 'Edad en la verificación',
        'method' => 'Método',
        'reliable' => 'Fiable',
        'not_reliable' => 'No fiable',
        'provider' => 'Proveedor',
        'assured_at' => 'Verificada el',
        'expires_at' => 'Válida hasta',
        'never' => 'Sin vencimiento',
        'minor' => 'Menor',
        'guardian' => 'Padre, madre o tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Tutor verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado el',
        'created_at' => 'Creado el',
        'authorized_by' => 'Otorgado por',
        'opted_in_at' => 'Otorgado el',
        'revoked_at' => 'Retirado el',
    ],

    'filters' => [
        'valid' => 'Aún válidas',
        'under_18' => 'Menores de 18',
        'active' => 'Activo',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaración',
        'os_signal' => 'Señal del sistema operativo',
        'store_signal' => 'Señal de la tienda de aplicaciones',
        'document' => 'Documento',
        'facial_estimation' => 'Estimación facial de edad',
        'verifiable_credential' => 'Credencial verificable',
        'guardian' => 'Indicada por el tutor',
    ],

    'authorized_by' => [
        'consumer' => 'El menor (13 o más)',
        'parent' => 'Padre, madre o tutor',
    ],

    'status' => [
        'pending' => 'Verificación pendiente',
        'active' => 'Activo',
        'revoked' => 'Revocado',
    ],

    'help' => [
        'verified' => 'Confirme solo tras una comprobación razonable de que esta persona es el padre, la madre o el tutor del menor. Por debajo de 13 años, solo esta persona puede consentir por el menor (COPPA).',
        'revoke' => 'Los consentimientos que dio esta persona siguen registrados; retírelos en Consentimientos de menores si ya no deben contar.',
        'revoke_opt_in' => 'La publicidad dirigida y la venta de los datos de este menor dejan de estar permitidas.',
    ],

    'actions' => [
        'verify' => 'Verificar tutor',
        'revoke' => 'Revocar vínculo',
        'revoke_opt_in' => 'Retirar el consentimiento',
    ],

    'notifications' => [
        'verified' => 'Tutor verificado.',
        'revoked' => 'Vínculo revocado.',
        'opt_in_revoked' => 'Consentimiento retirado.',
    ],
];
