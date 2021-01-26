<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Questo campo deve essere accettato.',
    'active_url'           => 'Questo campo non è un URL valido.',
    'after'                => 'Questo campo deve essere una data successiva al :date.',
    'after_or_equal'       => 'Questo campo deve essere una data successiva o uguale al :date.',
    'alpha'                => 'Questo campo può contenere solo lettere.',
    'alpha_dash'           => 'Questo campo può contenere solo lettere, numeri e trattini.',
    'alpha_num'            => 'Questo campo può contenere solo lettere e numeri.',
    'array'                => 'Questo campo deve essere un array.',
    'before'               => 'Questo campo deve essere una data precedente al :date.',
    'before_or_equal'      => 'Questo campo deve essere una data precedente o uguale al :date.',
    'between'              => [
        'numeric' => 'Questo campo deve trovarsi tra :min - :max.',
        'file'    => 'Questo campo deve trovarsi tra :min - :max kilobyte.',
        'string'  => 'Questo campo deve trovarsi tra :min - :max caratteri.',
        'array'   => 'Questo campo deve avere tra :min - :max elementi.',
    ],
    'boolean'              => 'Questo campo deve essere vero o falso.',
    'confirmed'            => 'Il campo di conferma per questo campo non coincide.',
    'date'                 => 'Questo campo non è una data valida.',
    'date_format'          => 'Questo campo non coincide con il formato :format.',
    'different'            => 'Questo campo e :other devono essere differenti.',
    'digits'               => 'Questo campo deve essere di :digits cifre.',
    'digits_between'       => 'Questo campo deve essere tra :min e :max cifre.',
    'dimensions'           => "Le dimensioni dell'immagine di questo campo non sono valide.",
    'distinct'             => 'Questo campo contiene un valore duplicato.',
    'email'                => 'Questo campo non è valido.',
    'exists'               => 'Questo campo selezionato non è valido.',
    'file'                 => 'Questo campo deve essere un file.',
    'filled'               => 'Questo campo deve contenere un valore.',
    'gt'                   => [
        'numeric' => 'Questo campo deve essere maggiore di :value.',
        'file'    => 'Questo campo deve essere maggiore di :value kilobyte.',
        'string'  => 'Questo campo deve contenere più di :value caratteri.',
        'array'   => 'Questo campo deve contenere più di :value elementi.',
    ],
    'gte'                  => [
        'numeric' => 'Questo campo deve essere uguale o maggiore di :value.',
        'file'    => 'Questo campo deve essere uguale o maggiore di :value kilobyte.',
        'string'  => 'Questo campo deve contenere un numero di caratteri uguale o maggiore di :value.',
        'array'   => 'Questo campo deve contenere un numero di elementi uguale o maggiore di :value.',
    ],
    'image'                => "Questo campo deve essere un'immagine.",
    'in'                   => 'Questo campo selezionato non è valido.',
    'in_array'             => 'Questo valore non è consentito.',
    'integer'              => 'Questo campo deve essere un numero intero.',
    'ip'                   => 'Questo campo deve essere un indirizzo IP valido.',
    'ipv4'                 => 'Questo campo deve essere un indirizzo IPv4 valido.',
    'ipv6'                 => 'Questo campo deve essere un indirizzo IPv6 valido.',
    'json'                 => 'Questo campo deve essere una stringa JSON valida.',
    'lt'                   => [
        'numeric' => 'Questo campo deve essere minore di :value.',
        'file'    => 'Questo campo deve essere minore di :value kilobyte.',
        'string'  => 'Questo campo deve contenere meno di :value caratteri.',
        'array'   => 'Questo campo deve contenere meno di :value elementi.',
    ],
    'lte'                  => [
        'numeric' => 'Questo campo deve essere minore o uguale a :value.',
        'file'    => 'Questo campo deve essere minore o uguale a :value kilobyte.',
        'string'  => 'Questo campo deve contenere un numero di caratteri minore o uguale a :value.',
        'array'   => 'Questo campo deve contenere un numero di elementi minore o uguale a :value.',
    ],
    'max'                  => [
        'numeric' => 'Questo campo non può essere superiore a :max.',
        'file'    => 'Questo campo non può essere superiore a :max kilobyte.',
        'string'  => 'Questo campo non può contenere più di :max caratteri.',
        'array'   => 'Questo campo non può avere più di :max elementi.',
    ],
    'mimes'                => 'Questo campo deve essere del tipo: :values.',
    'mimetypes'            => 'Questo campo deve essere del tipo: :values.',
    'min'                  => [
        'numeric' => 'Questo campo deve essere almeno :min.',
        'file'    => 'Questo campo deve essere almeno di :min kilobyte.',
        'string'  => 'Questo campo deve contenere almeno :min caratteri.',
        'array'   => 'Questo campo deve avere almeno :min elementi.',
    ],
    'not_in'               => 'Il valore selezionato per questo campo non è valido.',
    'not_regex'            => 'Il formato di questo campo non è valido.',
    'numeric'              => 'Questo campo deve essere un numero.',
    'present'              => 'Questo campo deve essere presente.',
    'regex'                => 'Il formato de questo campo non è valido.',
    'required'             => 'Questo campo è richiesto.',
    'required_if'          => 'Questo campo è richiesto quando :other è :value.',
    'required_unless'      => 'Questo campo è richiesto a meno che :other sia in :values.',
    'required_with'        => 'Questo campo è richiesto quando :values è presente.',
    'required_with_all'    => 'Questo campo è richiesto quando :values sono presenti.',
    'required_without'     => 'Questo campo è richiesto quando :values non è presente.',
    'required_without_all' => 'Questo campo è richiesto quando nessuno di :values è presente.',
    'same'                 => 'Questo campo e :other devono coincidere.',
    'size'                 => [
        'numeric' => 'Questo campo deve essere :size.',
        'file'    => 'Questo campo deve essere :size kilobyte.',
        'string'  => 'Questo campo deve contenere :size caratteri.',
        'array'   => 'Questo campo deve contenere :size elementi.',
    ],
    'string'               => 'Questo campo deve essere una stringa.',
    'timezone'             => 'Questo campo deve essere una zona valida.',
    'unique'               => 'Questo campo è stato già utilizzato.',
    'uploaded'             => 'Questo campo non è stato caricato.',
    'url'                  => 'Il formato de questo campo non è valido.',

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
        'username'              => 'nome utente',
        'first_name'            => 'nome',
        'last_name'             => 'cognome',
        'surname'             	=> 'cognome',
        'password_confirmation' => 'conferma password',
        'city'                  => 'città',
        'country'               => 'paese',
        'address'               => 'indirizzo',
        'phone'                 => 'telefono',
        'mobile'                => 'cellulare',
        'age'                   => 'età',
        'sex'                   => 'sesso',
        'gender'                => 'genere',
        'day'                   => 'giorno',
        'month'                 => 'mese',
        'year'                  => 'anno',
        'hour'                  => 'ora',
        'minute'                => 'minuto',
        'second'                => 'secondo',
        'title'                 => 'titolo',
        'content'               => 'contenuto',
        'description'           => 'descrizione',
        'excerpt'               => 'estratto',
        'date'                  => 'data',
        'time'                  => 'ora',
        'available'             => 'disponibile',
        'size'                  => 'dimensione',
    ],
];
