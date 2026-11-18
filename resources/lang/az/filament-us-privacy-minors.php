<?php

return [
    'assurances' => [
        'label' => 'Yaş yoxlaması',
        'plural_label' => 'Yaş yoxlamaları',
    ],

    'opt_ins' => [
        'label' => 'Yetkinlik yaşına çatmayanın razılığı',
        'plural_label' => 'Yetkinlik yaşına çatmayanların razılıqları',
    ],

    'guardians' => [
        'label' => 'Valideyn bağlantısı',
        'plural_label' => 'Valideyn bağlantıları',
    ],

    'fields' => [
        'subject' => 'Hesab',
        'age' => 'Yoxlama zamanı yaş',
        'method' => 'Üsul',
        'reliable' => 'Etibarlı',
        'not_reliable' => 'Etibarsız',
        'provider' => 'Provayder',
        'assured_at' => 'Yoxlanılıb',
        'expires_at' => 'Etibarlıdır',
        'never' => 'Müddətsiz',
        'minor' => 'Yetkinlik yaşına çatmayan',
        'guardian' => 'Valideyn və ya qəyyum',
        'relationship' => 'Qohumluq',
        'verified' => 'Valideyn təsdiqlənib',
        'status' => 'Status',
        'verified_at' => 'Təsdiqlənib',
        'created_at' => 'Yaradılıb',
        'authorized_by' => 'Verən',
        'opted_in_at' => 'Verilmə tarixi',
        'revoked_at' => 'Geri götürülmə tarixi',
    ],

    'filters' => [
        'valid' => 'Hələ etibarlı',
        'under_18' => '18 yaşdan aşağı',
        'active' => 'Aktiv',
    ],

    'methods' => [
        'self_declaration' => 'Özünü bəyan',
        'os_signal' => 'Əməliyyat sistemi siqnalı',
        'store_signal' => 'Tətbiq mağazası siqnalı',
        'document' => 'Sənəd',
        'facial_estimation' => 'Üzlə yaş təxmini',
        'verifiable_credential' => 'Yoxlanıla bilən etimadnamə',
        'guardian' => 'Valideyn tərəfindən bildirilib',
    ],

    'authorized_by' => [
        'consumer' => 'Yetkinlik yaşına çatmayan (13 və yuxarı)',
        'parent' => 'Valideyn və ya qəyyum',
    ],

    'status' => [
        'pending' => 'Təsdiq gözlənilir',
        'active' => 'Aktiv',
        'revoked' => 'Ləğv edilib',
    ],

    'help' => [
        'verified' => 'Yalnız bu şəxsin uşağın valideyni və ya qəyyumu olduğunu əsaslı yoxlamadan sonra təsdiqləyin. 13 yaşdan aşağı yalnız bu şəxs uşaq adından razılıq verə bilər (COPPA).',
        'revoke' => 'Bu şəxsin verdiyi razılıqlar qeydiyyatda qalır; artıq nəzərə alınmamalıdırsa, onları razılıqlar bölməsində geri götürün.',
        'revoke_opt_in' => 'Bu uşağın məlumatları üçün hədəfli reklam və satışa artıq icazə verilmir.',
    ],

    'actions' => [
        'verify' => 'Valideyni təsdiqlə',
        'revoke' => 'Bağlantını ləğv et',
        'revoke_opt_in' => 'Razılığı geri götür',
    ],

    'notifications' => [
        'verified' => 'Valideyn təsdiqləndi.',
        'revoked' => 'Bağlantı ləğv edildi.',
        'opt_in_revoked' => 'Razılıq geri götürüldü.',
    ],
];
