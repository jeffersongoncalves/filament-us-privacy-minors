<?php

return [
    'assurances' => [
        'label' => 'Yaş doğrulama',
        'plural_label' => 'Yaş doğrulamaları',
    ],

    'opt_ins' => [
        'label' => 'Reşit olmayanın rızası',
        'plural_label' => 'Reşit olmayanların rızaları',
    ],

    'guardians' => [
        'label' => 'Veli bağlantısı',
        'plural_label' => 'Veli bağlantıları',
    ],

    'fields' => [
        'subject' => 'Hesap',
        'age' => 'Kontrol anındaki yaş',
        'method' => 'Yöntem',
        'reliable' => 'Güvenilir',
        'not_reliable' => 'Güvenilir değil',
        'provider' => 'Sağlayıcı',
        'assured_at' => 'Doğrulama tarihi',
        'expires_at' => 'Geçerlilik sonu',
        'never' => 'Süresiz',
        'minor' => 'Reşit olmayan',
        'guardian' => 'Ebeveyn veya vasi',
        'relationship' => 'Yakınlık',
        'verified' => 'Veli doğrulandı',
        'status' => 'Durum',
        'verified_at' => 'Doğrulama tarihi',
        'created_at' => 'Oluşturulma',
        'authorized_by' => 'Veren',
        'opted_in_at' => 'Verildiği tarih',
        'revoked_at' => 'Geri çekildiği tarih',
    ],

    'filters' => [
        'valid' => 'Hâlâ geçerli',
        'under_18' => '18 yaş altı',
        'active' => 'Etkin',
    ],

    'methods' => [
        'self_declaration' => 'Beyan',
        'os_signal' => 'İşletim sistemi sinyali',
        'store_signal' => 'Uygulama mağazası sinyali',
        'document' => 'Belge',
        'facial_estimation' => 'Yüzden yaş tahmini',
        'verifiable_credential' => 'Doğrulanabilir kimlik bilgisi',
        'guardian' => 'Veli tarafından bildirildi',
    ],

    'authorized_by' => [
        'consumer' => 'Reşit olmayan (13 veya üzeri)',
        'parent' => 'Ebeveyn veya vasi',
    ],

    'status' => [
        'pending' => 'Doğrulama bekliyor',
        'active' => 'Etkin',
        'revoked' => 'İptal edildi',
    ],

    'help' => [
        'verified' => 'Yalnızca bu kişinin reşit olmayanın ebeveyni veya vasisi olduğunu makul bir kontrolden sonra onaylayın. 13 yaşın altında reşit olmayan adına yalnızca bu kişi rıza verebilir (COPPA).',
        'revoke' => 'Bu kişinin verdiği rızalar kayıtlı kalır; artık geçerli olmamaları gerekiyorsa Reşit olmayanların rızaları bölümünden geri çekin.',
        'revoke_opt_in' => 'Bu reşit olmayanın verileriyle hedefli reklam ve satışa artık izin verilmez.',
    ],

    'actions' => [
        'verify' => 'Veliyi doğrula',
        'revoke' => 'Bağlantıyı iptal et',
        'revoke_opt_in' => 'Rızayı geri çek',
    ],

    'notifications' => [
        'verified' => 'Veli doğrulandı.',
        'revoked' => 'Bağlantı iptal edildi.',
        'opt_in_revoked' => 'Rıza geri çekildi.',
    ],
];
