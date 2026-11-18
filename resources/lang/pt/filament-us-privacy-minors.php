<?php

return [
    'assurances' => [
        'label' => 'Verificação de idade',
        'plural_label' => 'Verificações de idade',
    ],

    'opt_ins' => [
        'label' => 'Consentimento de menor',
        'plural_label' => 'Consentimentos de menores',
    ],

    'guardians' => [
        'label' => 'Ligação a responsável',
        'plural_label' => 'Ligações a responsáveis',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na verificação',
        'method' => 'Método',
        'reliable' => 'Fiável',
        'not_reliable' => 'Não fiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Verificada em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Menor',
        'guardian' => 'Pai, mãe ou tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável verificado',
        'status' => 'Estado',
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
        'os_signal' => 'Sinal do sistema operativo',
        'store_signal' => 'Sinal da loja de aplicações',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial da idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Indicada pelo responsável',
    ],

    'authorized_by' => [
        'consumer' => 'O menor (13 anos ou mais)',
        'parent' => 'Pai, mãe ou tutor',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Só confirme após uma verificação razoável de que esta pessoa é o progenitor ou tutor do menor. Abaixo dos 13 anos, só esta pessoa pode consentir pelo menor (COPPA).',
        'revoke' => 'Os consentimentos dados por esta pessoa ficam registados; retire-os em Consentimentos de menores se deixarem de dever contar.',
        'revoke_opt_in' => 'A publicidade direcionada e a venda dos dados deste menor deixam de ser permitidas.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável',
        'revoke' => 'Revogar ligação',
        'revoke_opt_in' => 'Retirar consentimento',
    ],

    'notifications' => [
        'verified' => 'Responsável verificado.',
        'revoked' => 'Ligação revogada.',
        'opt_in_revoked' => 'Consentimento retirado.',
    ],
];
