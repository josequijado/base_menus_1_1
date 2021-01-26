<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'Este campo deverá ser aceite.',
    'active_url'           => 'Este campo não contém um URL válido.',
    'after'                => 'Este campo deverá conter uma data posterior a :date.',
    'after_or_equal'       => 'Este campo deverá conter uma data posterior ou igual a :date.',
    'alpha'                => 'Este campo deverá conter apenas letras.',
    'alpha_dash'           => 'Este campo deverá conter apenas letras, números e traços.',
    'alpha_num'            => 'Este campo deverá conter apenas letras e números .',
    'array'                => 'Este campo deverá conter uma coleção de elementos.',
    'before'               => 'Este campo deverá conter uma data anterior a :date.',
    'before_or_equal'      => 'Este campo deverá conter uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'Este campo deverá ter um valor entre :min - :max.',
        'file'    => 'Este campo deverá ter um tamanho entre :min - :max kilobytes.',
        'string'  => 'Este campo deverá conter entre :min - :max caracteres.',
        'array'   => 'Este campo deverá conter entre :min - :max elementos.',
    ],
    'boolean'              => 'Este campo deverá conter o valor verdadeiro ou falso.',
    'confirmed'            => 'A confirmação para este campo não coincide.',
    'date'                 => 'Este campo não contém uma data válida.',
    'date_format'          => 'A data indicada para este campo não respeita o formato :format.',
    'different'            => 'Este campo e :other deverão conter valores diferentes.',
    'digits'               => 'Este campo deverá conter :digits caracteres.',
    'digits_between'       => 'Este campo deverá conter entre :min a :max caracteres.',
    'dimensions'           => 'Este campo deverá conter uma dimensão de imagem válida.',
    'distinct'             => 'Este campo contém um valor duplicado.',
    'email'                => 'Este campo não contém um endereço de correio eletrónico válido.',
    'exists'               => 'O valor selecionado para este campo é inválido.',
    'file'                 => 'Este campo deverá conter um ficheiro.',
    'filled'               => 'É obrigatória a indicação de um valor para este campo.',
    'gt'                   => [
        'numeric' => 'Este campo deve ser maior que :value.',
        'file'    => 'Este campo deve ser maior que :value kilobytes.',
        'string'  => 'Este campo deve ser maior que :value characters.',
        'array'   => 'Este campo deve ter mais de :value itens.',
    ],
    'gte'                  => [
        'numeric' => 'Este campo deve ser maior ou igual :value.',
        'file'    => 'Este campo deve ser maior ou igual :value kilobytes.',
        'string'  => 'Este campo deve ser maior ou igual :value characters.',
        'array'   => 'Este campo deve ter :value itens ou mais.',
    ],
    'image'                => 'Este campo deverá conter uma imagem.',
    'in'                   => 'Este campo não contém um valor válido.',
    'in_array'             => 'Este valor não é permitido.',
    'integer'              => 'Este campo deverá conter um número inteiro.',
    'ip'                   => 'Este campo deverá conter um IP válido.',
    'ipv4'                 => 'Este campo deverá conter um IPv4 válido.',
    'ipv6'                 => 'Este campo deverá conter um IPv6 válido.',
    'json'                 => 'Este campo deverá conter um texto JSON válido.',
    'lt'                   => [
        'numeric' => 'Este campo deve ser menor que :value.',
        'file'    => 'Este campo deve ser menor que :value kilobytes.',
        'string'  => 'Este campo deve ser menor que :value characters.',
        'array'   => 'Este campo deve ter menos de :value itens.',
    ],
    'lte'                  => [
        'numeric' => 'Este campo deve ser menor ou igual :value.',
        'file'    => 'Este campo deve ser menor ou igual :value kilobytes.',
        'string'  => 'Este campo deve ser menor ou igual :value characters.',
        'array'   => 'Este campo não deve ter mais de :value itens.',
    ],
    'max'                  => [
        'numeric' => 'Este campo não deverá conter um valor superior a :max.',
        'file'    => 'Este campo não deverá ter um tamanho superior a :max kilobytes.',
        'string'  => 'Este campo não deverá conter mais de :max caracteres.',
        'array'   => 'Este campo não deverá conter mais de :max elementos.',
    ],
    'mimes'                => 'Este campo deverá conter um ficheiro do tipo: :values.',
    'mimetypes'            => 'Este campo deverá conter um ficheiro do tipo: :values.',
    'min'                  => [
        'numeric' => 'Este campo deverá ter um valor superior ou igual a :min.',
        'file'    => 'Este campo deverá ter no mínimo :min kilobytes.',
        'string'  => 'Este campo deverá conter no mínimo :min caracteres.',
        'array'   => 'Este campo deverá conter no mínimo :min elementos.',
    ],
    'not_in'               => 'Este campo contém um valor inválido.',
    'not_regex'            => 'Este campo format is invalid.',
    'numeric'              => 'Este campo deverá conter um valor numérico.',
    'present'              => 'Este campo deverá estar presente.',
    'regex'                => 'O formato do valor para este campo é inválido.',
    'required'             => 'É obrigatória a indicação de um valor para este campo.',
    'required_if'          => 'É obrigatória a indicação de um valor para este campo quando o valor do campo :other é igual a :value.',
    'required_unless'      => 'É obrigatória a indicação de um valor para este campo a menos que :other esteja presente em :values.',
    'required_with'        => 'É obrigatória a indicação de um valor para este campo quando :values está presente.',
    'required_with_all'    => 'É obrigatória a indicação de um valor para este campo quando um dos :values está presente.',
    'required_without'     => 'É obrigatória a indicação de um valor para este campo quando :values não está presente.',
    'required_without_all' => 'É obrigatória a indicação de um valor para este campo quando nenhum dos :values está presente.',
    'same'                 => 'Este campo e :other deverão conter valores iguais.',
    'size'                 => [
        'numeric' => 'Este campo deverá conter o valor :size.',
        'file'    => 'Este campo deverá ter o tamanho de :size kilobytes.',
        'string'  => 'Este campo deverá conter :size caracteres.',
        'array'   => 'Este campo deverá conter :size elementos.',
    ],
    'string'               => 'Este campo deverá conter texto.',
    'timezone'             => 'Este campo deverá ter um fuso horário válido.',
    'unique'               => 'O valor indicado para este campo já se encontra registado.',
    'uploaded'             => 'O upload do ficheiro falhou.',
    'url'                  => 'O formato do URL indicado para este campo.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'nome',
        'username'              => 'utilizador',
        'email'                 => 'correio eletrônico',
        'first_name'            => 'nome',
        'last_name'             => 'sobrenome',
        'surname'	            => 'sobrenome',
        'password'              => 'senha',
        'password_confirmation' => 'confirmação da senha',
        'city'                  => 'cidade',
        'country'               => 'país',
        'address'               => 'endereço',
        'phone'                 => 'telefone',
        'mobile'                => 'móvel',
        'age'                   => 'idade',
        'sex'                   => 'sexo',
        'gender'                => 'gênero',
        'year'                  => 'ano',
        'month'                 => 'mês',
        'day'                   => 'día',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'title'                 => 'título',
        'content'               => 'conteúdo',
        'body'                  => 'conteúdo',
        'description'           => 'descrição',
        'excerpt'               => 'abstrato',
        'date'                  => 'encontro',
        'time'                  => 'hora',
        'subject'               => 'caso',
        'message'               => 'mensagem',
    ],
];
