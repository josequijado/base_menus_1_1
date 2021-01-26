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

    'accepted'             => 'Este campo debe ser aceptado.',
    'active_url'           => 'Este campo no es una URL válida.',
    'after'                => 'Este campo debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'Este campo debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'Este campo sólo debe contener letras.',
    'alpha_dash'           => 'Este campo sólo debe contener letras, números y guiones.',
    'alpha_num'            => 'Este campo sólo debe contener letras y números.',
    'array'                => 'Este campo debe ser un conjunto.',
    'before'               => 'Este campo debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'Este campo debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'Este campo tiene que estar entre :min - :max.',
        'file'    => 'Este campo debe pesar entre :min - :max kilobytes.',
        'string'  => 'Este campo tiene que tener entre :min - :max caracteres.',
        'array'   => 'Este campo tiene que tener entre :min - :max ítems.',
    ],
    'boolean'              => 'Este campo debe tener un valor verdadero o falso.',
    'confirmed'            => 'La confirmación de este campo no coincide.',
    'date'                 => 'Este campo no es una fecha válida.',
    'date_format'          => 'Este campo no corresponde al formato :format.',
    'different'            => 'Este campo y :other deben ser diferentes.',
    'digits'               => 'Este campo debe tener :digits dígitos.',
    'digits_between'       => 'Este campo debe tener entre :min y :max dígitos.',
    'dimensions'           => 'Las dimensiones de la imagen no son válidas.',
    'distinct'             => 'Este campo contiene un valor duplicado.',
    'email'                => 'Este campo no es un correo válido',
    'exists'               => 'Este campo es inválido.',
    'file'                 => 'Este campo debe ser un archivo.',
    'filled'               => 'Este campo es obligatorio.',
    'gt'                   => [
        'numeric' => 'Este campo debe ser mayor que :value.',
        'file'    => 'Este campo debe tener más de :value kilobytes.',
        'string'  => 'Este campo debe tener más de :value caracteres.',
        'array'   => 'Este campo debe tener más de :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'Este campo debe ser como mínimo :value.',
        'file'    => 'Este campo debe tener como mínimo :value kilobytes.',
        'string'  => 'Este campo debe tener como mínimo :value caracteres.',
        'array'   => 'Este campo debe tener como mínimo :value elementos.',
    ],
    'image'                => 'Este campo debe ser una imagen.',
    'in'                   => 'Este campo es inválido.',
    'in_array'             => 'Este valor no está permitido.',
    'integer'              => 'Este campo debe ser un número entero.',
    'ip'                   => 'Este campo debe ser una dirección IP válida.',
    'ipv4'                 => 'Este campo debe ser un dirección IPv4 válida',
    'ipv6'                 => 'Este campo debe ser un dirección IPv6 válida.',
    'json'                 => 'Este campo debe tener una cadena JSON válida.',
    'lt'                   => [
        'numeric' => 'Este campo debe ser menor que :value.',
        'file'    => 'Este campo debe tener menos de :value kilobytes.',
        'string'  => 'Este campo debe tener menos de :value caracteres.',
        'array'   => 'Este campo debe tener menos de :value elementos.',
    ],
    'lte'                  => [
        'numeric' => 'Este campo debe ser como máximo :value.',
        'file'    => 'Este campo debe tener como máximo :value kilobytes.',
        'string'  => 'Este campo debe tener como máximo :value caracteres.',
        'array'   => 'Este campo debe tener como máximo :value elementos.',
    ],
    'max'                  => [
        'numeric' => 'Este campo no debe ser mayor a :max.',
        'file'    => 'Este campo no debe ser mayor que :max kilobytes.',
        'string'  => 'Este campo no debe ser mayor que :max caracteres.',
        'array'   => 'Este campo no debe tener más de :max elementos.',
    ],
    'mimes'                => 'Este campo debe ser un archivo con formato: :values.',
    'mimetypes'            => 'Este campo debe ser un archivo con formato: :values.',
    'min'                  => [
        'numeric' => 'El tamaño de este campo debe ser de al menos :min.',
        'file'    => 'El tamaño de este campo debe ser de al menos :min kilobytes.',
        'string'  => 'Este campo debe contener al menos :min caracteres.',
        'array'   => 'Este campo debe tener al menos :min elementos.',
    ],
    'not_in'               => 'Este campo es inválido.',
    'not_regex'            => 'El formato del campo no es válido.',
    'numeric'              => 'Este campo debe ser numérico.',
    'present'              => 'Este campo debe estar presente.',
    'regex'                => 'El formato de este campo es inválido.',
    'required'             => 'Este campo es obligatorio.',
    'required_if'          => 'Este campo es obligatorio cuando :other es :value.',
    'required_unless'      => 'Este campo es obligatorio a menos que :other esté en :values.',
    'required_with'        => 'Este campo es obligatorio cuando :values está presente.',
    'required_with_all'    => 'Este campo es obligatorio cuando :values está presente.',
    'required_without'     => 'Este campo es obligatorio cuando :values no está presente.',
    'required_without_all' => 'Este campo es obligatorio cuando ninguno de :values estén presentes.',
    'same'                 => 'Este campo y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El tamaño de este campo debe ser :size.',
        'file'    => 'El tamaño de este campo debe ser :size kilobytes.',
        'string'  => 'Este campo debe contener :size caracteres.',
        'array'   => 'Este campo debe contener :size elementos.',
    ],
    'string'               => 'Este campo debe ser una cadena de caracteres.',
    'timezone'             => 'Este campo debe ser una zona válida.',
    'unique'               => 'Este campo ya ha sido registrado.',
    'uploaded'             => 'Subir este campo ha fallado.',
    'url'                  => 'El formato de este campo es inválido.',
    'uuid'                 => 'Este campo debe ser un UUID válido.',

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
        'password' => [
            'min' => 'La :attribute debe contener más de :min caracteres',
        ],
        'email'    => [
            'unique' => 'El :attribute ya ha sido registrado.',
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
        'name'                  => 'nombre',
        'username'              => 'usuario',
        'email'                 => 'correo electrónico',
        'first_name'            => 'nombre',
        'last_name'             => 'apellido',
        'surname'	            => 'apellido',
        'password'              => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'city'                  => 'ciudad',
        'country'               => 'país',
        'address'               => 'dirección',
        'phone'                 => 'teléfono',
        'mobile'                => 'móvil',
        'age'                   => 'edad',
        'sex'                   => 'sexo',
        'gender'                => 'género',
        'year'                  => 'año',
        'month'                 => 'mes',
        'day'                   => 'día',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'title'                 => 'título',
        'content'               => 'contenido',
        'body'                  => 'contenido',
        'description'           => 'descripción',
        'excerpt'               => 'extracto',
        'date'                  => 'fecha',
        'time'                  => 'hora',
        'subject'               => 'asunto',
        'message'               => 'mensaje',
    ],
];
