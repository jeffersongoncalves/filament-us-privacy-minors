<?php

return [
    'assurances' => [
        'label' => 'احراز سن',
        'plural_label' => 'احرازهای سن',
    ],

    'opt_ins' => [
        'label' => 'رضایت صغیر',
        'plural_label' => 'رضایت‌های صغار',
    ],

    'guardians' => [
        'label' => 'پیوند با ولی',
        'plural_label' => 'پیوندهای ولی',
    ],

    'fields' => [
        'subject' => 'حساب',
        'age' => 'سن هنگام بررسی',
        'method' => 'روش',
        'reliable' => 'قابل اعتماد',
        'not_reliable' => 'غیرقابل اعتماد',
        'provider' => 'ارائه‌دهنده',
        'assured_at' => 'تاریخ احراز',
        'expires_at' => 'معتبر تا',
        'never' => 'بدون انقضا',
        'minor' => 'صغیر',
        'guardian' => 'والد یا سرپرست',
        'relationship' => 'نسبت',
        'verified' => 'ولی تأیید شد',
        'status' => 'وضعیت',
        'verified_at' => 'تاریخ تأیید',
        'created_at' => 'تاریخ ایجاد',
        'authorized_by' => 'داده‌شده توسط',
        'opted_in_at' => 'تاریخ ارائه',
        'revoked_at' => 'تاریخ پس‌گیری',
    ],

    'filters' => [
        'valid' => 'هنوز معتبر',
        'under_18' => 'زیر ۱۸',
        'active' => 'فعال',
    ],

    'methods' => [
        'self_declaration' => 'خوداظهاری',
        'os_signal' => 'سیگنال سیستم‌عامل',
        'store_signal' => 'سیگنال فروشگاه برنامه',
        'document' => 'مدرک',
        'facial_estimation' => 'تخمین سن با چهره',
        'verifiable_credential' => 'اعتبارنامه قابل‌تأیید',
        'guardian' => 'اعلام‌شده توسط ولی',
    ],

    'authorized_by' => [
        'consumer' => 'صغیر (۱۳ سال یا بیشتر)',
        'parent' => 'والد یا سرپرست',
    ],

    'status' => [
        'pending' => 'در انتظار تأیید',
        'active' => 'فعال',
        'revoked' => 'لغوشده',
    ],

    'help' => [
        'verified' => 'فقط پس از بررسی معقول تأیید کنید که این شخص والد یا سرپرست صغیر است. زیر ۱۳ سال، فقط این شخص می‌تواند به جای صغیر رضایت دهد (COPPA).',
        'revoke' => 'رضایت‌هایی که این شخص داده ثبت‌شده باقی می‌مانند؛ اگر نباید دیگر معتبر باشند، آن‌ها را در رضایت‌های صغار پس بگیرید.',
        'revoke_opt_in' => 'تبلیغات هدفمند و فروش داده‌های این صغیر دیگر مجاز نیست.',
    ],

    'actions' => [
        'verify' => 'تأیید ولی',
        'revoke' => 'لغو پیوند',
        'revoke_opt_in' => 'پس گرفتن رضایت',
    ],

    'notifications' => [
        'verified' => 'ولی تأیید شد.',
        'revoked' => 'پیوند لغو شد.',
        'opt_in_revoked' => 'رضایت پس گرفته شد.',
    ],
];
