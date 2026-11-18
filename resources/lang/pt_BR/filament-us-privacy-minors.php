<?php

return [
    'assurances' => [
        'label' => 'Aferição de idade',
        'plural_label' => 'Aferições de idade',
    ],

    'opt_ins' => [
        'label' => 'Consentimento de menor',
        'plural_label' => 'Consentimentos de menores',
    ],

    'guardians' => [
        'label' => 'Vínculo com responsável',
        'plural_label' => 'Vínculos com responsáveis',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na aferição',
        'method' => 'Método',
        'reliable' => 'Confiável',
        'not_reliable' => 'Não confiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Aferida em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Menor',
        'guardian' => 'Pai, mãe ou responsável',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável verificado',
        'status' => 'Situação',
        'verified_at' => 'Verificado em',
        'created_at' => 'Criado em',
        'authorized_by' => 'Dado por',
        'opted_in_at' => 'Dado em',
        'revoked_at' => 'Retirado em',
    ],

    'filters' => [
        'valid' => 'Ainda válidas',
        'under_18' => 'Menores de 18',
        'active' => 'Ativo',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaração',
        'os_signal' => 'Sinal do sistema operacional',
        'store_signal' => 'Sinal da loja de aplicativos',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial de idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Informada pelo responsável',
    ],

    'authorized_by' => [
        'consumer' => 'O menor (13 anos ou mais)',
        'parent' => 'Pai, mãe ou responsável',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Só confirme após uma verificação razoável de que esta pessoa é o pai, a mãe ou o responsável pelo menor. Abaixo de 13 anos, só essa pessoa pode consentir pelo menor (COPPA).',
        'revoke' => 'Os consentimentos que esta pessoa deu continuam registrados; retire-os em Consentimentos de menores se não devem mais valer.',
        'revoke_opt_in' => 'A publicidade direcionada e a venda dos dados deste menor deixam de ser permitidas.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável',
        'revoke' => 'Revogar vínculo',
        'revoke_opt_in' => 'Retirar consentimento',
    ],

    'notifications' => [
        'verified' => 'Responsável verificado.',
        'revoked' => 'Vínculo revogado.',
        'opt_in_revoked' => 'Consentimento retirado.',
    ],
];
