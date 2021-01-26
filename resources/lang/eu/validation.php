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

    'accepted'             => 'Eremu hau onartu beharra dago.',
    'active_url'           => 'Eremu hau ez da baliozko URL bat.',
    'after'                => 'Eremu hau :date osteko data izan behar da.',
    'after_or_equal'       => 'Eremu hau :date osteko data edo data bera izan behar da.',
    'alpha'                => 'Eremu hau hizkiak besterik ezin ditu izan.',
    'alpha_dash'           => 'Eremu hau hizkiak, zenbakiak eta marrak besterik ezin ditu izan.',
    'alpha_num'            => 'Eremu hau hizkiak eta zenbakiak besterik ezin ditu izan.',
    'array'                => 'Eremu hau bilduma izan behar da.',
    'before'               => 'Eremu hau :date aurreko data izan behar da.',
    'before_or_equal'      => 'Eremu hau :date aurreko data edo data bera izan behar da.',
    'between'              => [
        'numeric' => 'Eremu hau :min eta :max artean egon behar da.',
        'file'    => 'Eremu hau-(e)k :min eta :max kilobyte arteko pisua izan behar du.',
        'string'  => 'Eremu hau-(e)k :min eta :max karaktere artean izan behar ditu.',
        'array'   => 'Eremu hau-(e)k :min eta :max arteko elementu kopurua izan behar du.',
    ],
    'boolean'              => 'Eremu hau-(r)en balioa egia edo gezurra izan behar da.',
    'confirmed'            => 'Eremu hau-(r)en berrespena ez dator bat.',
    'date'                 => 'Eremu hau ez da baliozko data.',
    'date_format'          => 'Eremu hau datak ez du :format formatua.',
    'different'            => 'Eremu hau eta :other ezberdinak izan behar dira.',
    'digits'               => 'Eremu hau-(e)k :digits digitu eduki behar ditu.',
    'digits_between'       => 'Eremu hau-(e)k :min eta :max arteko digitu kopurua eduki behar du.',
    'dimensions'           => 'Eremu hau irudiaren neurriak baliogabeak dira.',
    'distinct'             => 'Eremu hau-(e)k bikoiztutako balioa dauka.',
    'email'                => 'Eremu hau baliozko helbide elektronikoa izan behar da.',
    'exists'               => 'Eremu hau baliogabea da.',
    'file'                 => 'Eremu hau fitxategi bat izan behar da.',
    'filled'               => 'Eremu hau derrigorrezkoa da.',
    'gt'                   => [
        'numeric' => 'Eremu hau-(e)k :value baino handiagoa izan behar du.',
        'file'    => 'Eremu hau-(e)k :value kilobyte baino handiagoa izan behar du.',
        'string'  => 'Eremu hau-(e)k :value karaktere baino gehiago izan behar ditu.',
        'array'   => 'Eremu hau-(e)k :value elementu baino gehiago izan behar ditu.',
    ],
    'gte'                  => [
        'numeric' => 'Eremu hau-(e)k :value baino handiagoa edo berdina izan behar du.',
        'file'    => 'Eremu hau-(e)k :value kilobyte edo gehiago izan behar ditu.',
        'string'  => 'Eremu hau-(e)k :value karaktere edo gehiago izan behar ditu.',
        'array'   => 'Eremu hau-(e)k :value elementu edo gehiago izan behar ditu.',
    ],
    'image'                => 'Eremu hau irudi bat izan behar da.',
    'in'                   => 'Eremu hau baliogabea da.',
    'in_array'             => 'Balio hau ez da onartzen.',
    'integer'              => 'Eremu hau zenbaki osoa izan behar da.',
    'ip'                   => 'Eremu hau baliozko IP helbidea izan behar da.',
    'ipv4'                 => 'Eremu hau baliozko IPv4 helbidea izan behar da.',
    'ipv6'                 => 'Eremu hau baliozko IPv6 helbidea izan behar da.',
    'json'                 => 'Eremu hau baliozko JSON karaktere-katea izan behar da.',
    'lt'                   => [
        'numeric' => 'Eremu hau-(e)k :value baino txikiagoa izan behar du.',
        'file'    => 'Eremu hau-(e)k :value kilobyte baino txikiagoa izan behar du.',
        'string'  => 'Eremu hau-(e)k :value karaktere baino gutxiago izan behar ditu.',
        'array'   => 'Eremu hau-(e)k :value elementu baino gutxiago izan behar ditu.',
    ],
    'lte'                  => [
        'numeric' => 'Eremu hau-(e)k :value baino txikiagoa edo berdina izan behar du.',
        'file'    => 'Eremu hau-(e)k :value kilobyte edo gutxiago izan behar ditu.',
        'string'  => 'Eremu hau-(e)k :value karaktere edo gutxiago izan behar ditu.',
        'array'   => 'Eremu hau-(e)k :value elementu edo gutxiago izan behar ditu.',
    ],
    'max'                  => [
        'numeric' => 'Eremu hau ezin da :max baino handiagoa izan.',
        'file'    => 'Eremu hau ezin da :max kilobyte baino handiagoa izan.',
        'string'  => 'Eremu hau-(e)k ezin du :max karaktere baino gehiago eduki.',
        'array'   => 'Eremu hau-(e)k ezin du :max elementu baino gehiago eduki.',
    ],
    'mimes'                => 'Eremu hau :values motako fitxategia izan behar da.',
    'mimetypes'            => 'Eremu hau :values motako fitxategia izan behar da.',
    'min'                  => [
        'numeric' => 'Eremu hau-(e)k gutxienez :min-(e)ko tamaina izan behar du.',
        'file'    => 'Eremu hau-(e)k gutxienez :min kilobyte izan behar ditu.',
        'string'  => 'Eremu hau-(e)k gutxienez :min karaktere izan behar ditu.',
        'array'   => 'Eremu hau-(e)k gutxienez :min elementu izan behar ditu.',
    ],
    'not_in'               => 'Eremu hau baliogabea da.',
    'not_regex'            => 'Eremu hau formatua baliogabea da.',
    'numeric'              => 'Eremu hau zenbakizkoa izan behar da.',
    'present'              => 'Eremu hau ezin da hutsik egon.',
    'regex'                => 'Eremu hau baliogabea da.',
    'required'             => 'Eremu hau derrigorrezkoa da.',
    'required_if'          => 'Eremu hau derrigorrezkoa da :other :value denean.',
    'required_unless'      => 'Eremu hau derrigorrezkoa da :other :values-(e)n egon ezean.',
    'required_with'        => 'Eremu hau derrigorrezkoa da :values dagoenean.',
    'required_with_all'    => 'Eremu hau derrigorrezkoa da :values daudenean.',
    'required_without'     => 'Eremu hau derrigorrezkoa da :values ez dagoenean.',
    'required_without_all' => 'Eremu hau derrigorrezkoa da :values ez daudenean.',
    'same'                 => 'Eremu hau eta :other bat etorri behar dira.',
    'size'                 => [
        'numeric' => 'Eremu hau-(e)k :size tamaina izan behar du.',
        'file'    => 'Eremu hau-(e)k :size kilobyte izan behar behar ditu.',
        'string'  => 'Eremu hau-(e)k :size karaktere izan behar ditu.',
        'array'   => 'Eremu hau-(e)k :size elementu izan behar ditu.',
    ],
    'string'               => 'Eremu hau karaktere-katea izan behar da.',
    'timezone'             => 'Eremu hau baliozko ordu-eremua izan behar da.',
    'unique'               => 'Eremu hau jadanik erregistratua izan da.',
    'uploaded'             => 'Eremu hau kargatzerakoan huts egin du.',
    'url'                  => 'Eremu hau-(r)en formatua baliogabea da.',
    'uuid'                 => 'Eremu hau-(e)k baliozko UUIDa izan behar du.',

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
        'name'                  => 'izena',
        'username'              => 'erabiltzailea',
        'email'                 => 'posta elektronikoa',
        'first_name'            => 'izena',
        'last_name'             => 'abizena',
        'surname'             	=> 'abizena',
        'password'              => 'pasahitza',
        'password_confirmation' => 'pasahitzaren berrespena',
        'city'                  => 'hiria',
        'country'               => 'herrialdea',
        'address'               => 'helbidea',
        'phone'                 => 'telefonoa',
        'mobile'                => 'mugikorra',
        'age'                   => 'adina',
        'sex'                   => 'sexua',
        'gender'                => 'generoa',
        'year'                  => 'urtea',
        'month'                 => 'hilabetea',
        'day'                   => 'eguna',
        'hour'                  => 'ordua',
        'minute'                => 'minutua',
        'second'                => 'segundoa',
        'title'                 => 'izenburua',
        'content'               => 'edukia',
        'body'                  => 'gorputza',
        'description'           => 'deskribapena',
        'excerpt'               => 'pasartea',
        'date'                  => 'data',
        'time'                  => 'denbora',
        'subject'               => 'gaia',
        'message'               => 'mezua',
        'available'             => 'erabilgarria',
        'size'                  => 'neurria',
    ],
];
