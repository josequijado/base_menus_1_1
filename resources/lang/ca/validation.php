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

    'accepted'             => 'Aquest camp ha de ser acceptat.',
    'active_url'           => 'Aquest camp no és un URL vàlid.',
    'after'                => 'Aquest camp ha de ser una data posterior a :date.',
    'after_or_equal'       => 'Aquest camp ha de ser una data posterior o igual a :date.',
    'alpha'                => 'Aquest camp només pot contenir lletres.',
    'alpha_dash'           => 'Aquest camp només pot contenir lletres, números i guions.',
    'alpha_num'            => 'Aquest camp només pot contenir lletres i números.',
    'array'                => 'Aquest camp ha de ser una matriu.',
    'before'               => 'Aquest camp ha de ser una data anterior a :date.',
    'before_or_equal'      => 'Aquest camp ha de ser una data anterior o igual a :date.',
    'between'              => [
        'numeric' => "Aquest camp ha d'estar entre :min - :max.",
        'file'    => 'Aquest camp ha de pesar entre :min - :max kilobytes.',
        'string'  => 'Aquest camp ha de tenir entre :min - :max caràcters.',
        'array'   => 'Aquest camp ha de tenir entre :min - :max ítems.',
    ],
    'boolean'              => 'Aquest camp ha de ser verdader o fals',
    'confirmed'            => 'La confirmació de aquest camp no coincideix.',
    'date'                 => 'Aquest camp no és una data vàlida.',
    'date_format'          => 'Aquest camp no concorda amb el format :format.',
    'different'            => 'Aquest camp i :other han de ser diferents.',
    'digits'               => 'Aquest camp ha de tenir :digits dígits.',
    'digits_between'       => 'Aquest camp ha de tenir entre :min i :max dígits.',
    'dimensions'           => 'Les dimensions de la imatge no són vàlides.',
    'distinct'             => 'Aquest camp té un valor duplicat.',
    'email'                => 'Aquest camp no és un e-mail vàlid',
    'exists'               => 'Aquest camp és invàlid.',
    'file'                 => 'Aquest camp ha de ser un arxiu.',
    'filled'               => 'Aquest camp és obligatori.',
    'gt'                   => [
        'numeric' => 'Aquest camp must be greater than :value.',
        'file'    => 'Aquest camp must be greater than :value kilobytes.',
        'string'  => 'Aquest camp must be greater than :value characters.',
        'array'   => 'Aquest camp must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'Aquest camp must be greater than or equal :value.',
        'file'    => 'Aquest camp must be greater than or equal :value kilobytes.',
        'string'  => 'Aquest camp must be greater than or equal :value characters.',
        'array'   => 'Aquest camp must have :value items or more.',
    ],
    'image'                => 'Aquest camp ha de ser una imatge.',
    'in'                   => 'Aquest camp és invàlid',
    'in_array'             => 'Aquest valor no està permès.',
    'integer'              => 'Aquest camp ha de ser un nombre enter.',
    'ip'                   => 'Aquest camp ha de ser una adreça IP vàlida.',
    'ipv4'                 => 'Aquest camp ha de ser una adreça IPv4 vàlida.',
    'ipv6'                 => 'Aquest camp ha de ser una adreça IPv6 vàlida.',
    'json'                 => 'Aquest camp ha de ser una cadena JSON vàlida.',
    'lt'                   => [
        'numeric' => 'Aquest camp must be less than :value.',
        'file'    => 'Aquest camp must be less than :value kilobytes.',
        'string'  => 'Aquest camp must be less than :value characters.',
        'array'   => 'Aquest camp must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'Aquest camp must be less than or equal :value.',
        'file'    => 'Aquest camp must be less than or equal :value kilobytes.',
        'string'  => 'Aquest camp must be less than or equal :value characters.',
        'array'   => 'Aquest camp must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'Aquest camp no pot ser més gran que :max.',
        'file'    => 'Aquest camp no pot ser més gran que :max kilobytes.',
        'string'  => 'Aquest camp no pot ser més gran que :max caràcters.',
        'array'   => 'Aquest camp no pot tenir més de :max ítems.',
    ],
    'mimes'                => 'Aquest camp ha de ser un arxiu amb format: :values.',
    'mimetypes'            => 'Aquest camp ha de ser un arxiu amb format: :values.',
    'min'                  => [
        'numeric' => "El tamany de aquest camp ha de ser d'almenys :min.",
        'file'    => "El tamany de aquest camp ha de ser d'almenys :min kilobytes.",
        'string'  => 'Aquest camp ha de contenir almenys :min caràcters.',
        'array'   => 'Aquest camp ha de tenir almenys :min ítems.',
    ],
    'not_in'               => 'Aquest camp és invàlid.',
    'not_regex'            => 'Aquest camp format is invalid.',
    'numeric'              => ':attribute ha de ser numèric.',
    'present'              => 'Aquest camp ha d\'existir.',
    'regex'                => 'El format de aquest camp és invàlid.',
    'required'             => 'Aquest camp és obligatori.',
    'required_if'          => 'Aquest camp és obligatori quan :other és :value.',
    'required_unless'      => 'Aquest camp és obligatori a no ser que :other sigui a :values.',
    'required_with'        => 'Aquest camp és obligatori quan hi ha :values.',
    'required_with_all'    => 'Aquest camp és obligatori quan hi ha :values.',
    'required_without'     => 'Aquest camp és obligatori quan no hi ha :values.',
    'required_without_all' => 'Aquest camp és obligatori quan no hi ha cap valor dels següents: :values.',
    'same'                 => 'Aquest camp i :other han de coincidir.',
    'size'                 => [
        'numeric' => 'El tamany de aquest camp ha de ser :size.',
        'file'    => 'El tamany de aquest camp ha de ser :size kilobytes.',
        'string'  => 'Aquest camp ha de contenir :size caràcters.',
        'array'   => 'Aquest camp ha de contenir :size ítems.',
    ],
    'string'               => 'Aquest camp ha de ser una cadena.',
    'timezone'             => 'Aquest camp ha de ser una zona vàlida.',
    'unique'               => 'Aquest camp ja està registrat i no es pot repetir.',
    'uploaded'             => 'Aquest camp ha fallat al pujar.',
    'url'                  => 'Aquest camp no és una adreça web vàlida.',

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
        'name'                  => 'nom',
        'username'              => 'usuari',
        'email'                 => 'correu electrònic',
        'first_name'            => 'nom',
        'last_name'             => 'cognom',
        'surname'             => 'cognom',
        'password'              => 'contrasenya',
        'password_confirmation' => 'confirmació de la contrasenya',
        'city'                  => 'ciutat',
        'country'               => 'país',
        'address'               => 'adreça',
        'phone'                 => 'telèfon',
        'mobile'                => 'mòbil',
        'age'                   => 'edat',
        'sex'                   => 'sexe',
        'gender'                => 'gènere',
        'year'                  => 'any',
        'month'                 => 'mes',
        'day'                   => 'dia',
        'hour'                  => 'hora',
        'minute'                => 'minut',
        'second'                => 'segon',
        'title'                 => 'títol',
        'body'                  => 'contingut',
        'description'           => 'descripció',
        'excerpt'               => 'extracte',
        'date'                  => 'data',
        'time'                  => 'hora',
        'subject'               => 'assumpte',
        'message'               => 'missatge',
    ],
];
