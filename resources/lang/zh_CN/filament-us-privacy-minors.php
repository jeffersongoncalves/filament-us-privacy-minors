<?php

return [
    'assurances' => [
        'label' => '年龄核验',
        'plural_label' => '年龄核验',
    ],

    'opt_ins' => [
        'label' => '未成年人同意',
        'plural_label' => '未成年人同意记录',
    ],

    'guardians' => [
        'label' => '监护人关联',
        'plural_label' => '监护人关联',
    ],

    'fields' => [
        'subject' => '账户',
        'age' => '检查时的年龄',
        'method' => '方式',
        'reliable' => '可靠',
        'not_reliable' => '不可靠',
        'provider' => '提供方',
        'assured_at' => '核验时间',
        'expires_at' => '有效期至',
        'never' => '长期有效',
        'minor' => '未成年人',
        'guardian' => '父母或监护人',
        'relationship' => '关系',
        'verified' => '监护人已核实',
        'status' => '状态',
        'verified_at' => '核实时间',
        'created_at' => '创建时间',
        'authorized_by' => '提供者',
        'opted_in_at' => '提供时间',
        'revoked_at' => '撤回时间',
    ],

    'filters' => [
        'valid' => '仍有效',
        'under_18' => '未满18岁',
        'active' => '有效',
    ],

    'methods' => [
        'self_declaration' => '自我声明',
        'os_signal' => '操作系统信号',
        'store_signal' => '应用商店信号',
        'document' => '证件',
        'facial_estimation' => '人脸年龄估计',
        'verifiable_credential' => '可验证凭证',
        'guardian' => '由监护人提供',
    ],

    'authorized_by' => [
        'consumer' => '未成年人本人（13岁及以上）',
        'parent' => '父母或监护人',
    ],

    'status' => [
        'pending' => '待核实',
        'active' => '有效',
        'revoked' => '已撤销',
    ],

    'help' => [
        'verified' => '仅在合理核实此人为该未成年人的父母或监护人后确认。13岁以下只有此人可代表未成年人同意（COPPA）。',
        'revoke' => '此人给予的同意仍有记录；如应不再有效，请在“未成年人同意记录”中撤回。',
        'revoke_opt_in' => '不再允许对该未成年人的数据进行定向广告和出售。',
    ],

    'actions' => [
        'verify' => '核实监护人',
        'revoke' => '撤销关联',
        'revoke_opt_in' => '撤回同意',
    ],

    'notifications' => [
        'verified' => '监护人已核实。',
        'revoked' => '关联已撤销。',
        'opt_in_revoked' => '已撤回同意。',
    ],
];
