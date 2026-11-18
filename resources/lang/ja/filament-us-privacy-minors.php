<?php

return [
    'assurances' => [
        'label' => '年齢確認',
        'plural_label' => '年齢確認',
    ],

    'opt_ins' => [
        'label' => '未成年者の同意',
        'plural_label' => '未成年者の同意',
    ],

    'guardians' => [
        'label' => '保護者リンク',
        'plural_label' => '保護者リンク',
    ],

    'fields' => [
        'subject' => 'アカウント',
        'age' => '確認時の年齢',
        'method' => '方法',
        'reliable' => '信頼できる',
        'not_reliable' => '信頼できない',
        'provider' => 'プロバイダー',
        'assured_at' => '確認日時',
        'expires_at' => '有効期限',
        'never' => '期限なし',
        'minor' => '未成年者',
        'guardian' => '親または保護者',
        'relationship' => '続柄',
        'verified' => '保護者確認済み',
        'status' => 'ステータス',
        'verified_at' => '確認日時',
        'created_at' => '作成日時',
        'authorized_by' => '同意者',
        'opted_in_at' => '同意日時',
        'revoked_at' => '撤回日時',
    ],

    'filters' => [
        'valid' => '有効なもののみ',
        'under_18' => '18歳未満',
        'active' => '有効',
    ],

    'methods' => [
        'self_declaration' => '自己申告',
        'os_signal' => 'OSのシグナル',
        'store_signal' => 'アプリストアのシグナル',
        'document' => '本人確認書類',
        'facial_estimation' => '顔による年齢推定',
        'verifiable_credential' => '検証可能な資格情報',
        'guardian' => '保護者による申告',
    ],

    'authorized_by' => [
        'consumer' => '未成年者本人（13歳以上）',
        'parent' => '親または保護者',
    ],

    'status' => [
        'pending' => '確認待ち',
        'active' => '有効',
        'revoked' => '取消済み',
    ],

    'help' => [
        'verified' => 'この人物が未成年者の親または保護者であることを合理的に確認した後でのみ確認してください。13歳未満は、この人物だけが未成年者に代わって同意できます（COPPA）。',
        'revoke' => 'この人物が与えた同意は記録に残ります。無効にする場合は「未成年者の同意」で撤回してください。',
        'revoke_opt_in' => 'この未成年者のデータのターゲティング広告と販売は許可されなくなります。',
    ],

    'actions' => [
        'verify' => '保護者を確認',
        'revoke' => 'リンクを取り消す',
        'revoke_opt_in' => '同意を撤回',
    ],

    'notifications' => [
        'verified' => '保護者を確認しました。',
        'revoked' => 'リンクを取り消しました。',
        'opt_in_revoked' => '同意を撤回しました。',
    ],
];
