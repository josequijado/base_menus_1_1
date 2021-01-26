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

    'accepted'             => 'Dette felt skal accepteres.',
    'active_url'           => 'Dette felt er ikke en gyldig URL.',
    'after'                => 'Dette felt skal være en dato efter :date.',
    'after_or_equal'       => 'Dette felt skal være en dato efter eller lig med :date.',
    'alpha'                => 'Dette felt må kun bestå af bogstaver.',
    'alpha_dash'           => 'Dette felt må kun bestå af bogstaver, tal og bindestreger.',
    'alpha_num'            => 'Dette felt må kun bestå af bogstaver og tal.',
    'array'                => 'Dette felt skal være et array.',
    'before'               => 'Dette felt skal være en dato før :date.',
    'before_or_equal'      => 'Dette felt skal være en dato før eller lig med :date.',
    'between'              => [
        'numeric' => 'Dette felt skal være mellem :min - :max.',
        'file'    => 'Dette felt skal være mellem :min - :max kilobytes.',
        'string'  => 'Dette felt skal være mellem :min - :max tegn.',
        'array'   => 'Dette felt skal indeholde mellem :min - :max elementer.',
    ],
    'boolean'              => 'Dette felt skal være sandt eller falsk',
    'confirmed'            => 'Dette felt er ikke det samme som bekræftelsesfeltet.',
    'date'                 => 'Dette felt er ikke en gyldig dato.',
    'date_format'          => 'Dette felt matcher ikke formatet :format.',
    'different'            => 'Dette felt og :other skal være forskellige.',
    'digits'               => 'Dette felt skal have :digits cifre.',
    'digits_between'       => 'Dette felt skal have mellem :min og :max cifre.',
    'dimensions'           => 'Dette felt har forkerte billede dimensioner.',
    'distinct'             => 'Dette felt har en duplikatværdi.',
    'email'                => 'Dette felt skal være en gyldig e-mailadresse.',
    'exists'               => 'Dette felt er ugyldig.',
    'file'                 => 'Dette felt skal være en fil.',
    'filled'               => 'Dette felt skal udfyldes.',
    'gt'                   => [
        'numeric' => 'Dette felt skal være større end :value.',
        'file'    => 'Dette felt skal være større end :value kilobytes.',
        'string'  => 'Dette felt skal være større end :value characters.',
        'array'   => 'Dette felt skal være mere end :value items.',
    ],
    'gte'                  => [
        'numeric' => 'Dette felt skal være større end eller lig med :value.',
        'file'    => 'Dette felt skal være større end eller lig med :value kilobytes.',
        'string'  => 'Dette felt skal være større end eller lig med :value characters.',
        'array'   => 'Dette felt skal have :value items eller mere.',
    ],
    'image'                => 'Dette felt skal være et billede.',
    'in'                   => 'Dette felt er ugyldig.',
    'in_array'             => 'Denne værdi er ikke tilladt.',
    'integer'              => 'Dette felt skal være et heltal.',
    'ip'                   => 'Dette felt skal være en gyldig IP adresse.',
    'ipv4'                 => 'Dette felt skal være en gyldig IPv4 adresse.',
    'ipv6'                 => 'Dette felt skal være en gyldig IPv6 adresse.',
    'json'                 => 'Dette felt skal være en gyldig JSON streng.',
    'lt'                   => [
        'numeric' => 'Dette felt skal være mindre end :value.',
        'file'    => 'Dette felt skal være mindre end :value kilobytes.',
        'string'  => 'Dette felt skal være mindre end :value characters.',
        'array'   => 'Dette felt skal have mindre end :value items.',
    ],
    'lte'                  => [
        'numeric' => 'Dette felt skal være mindre eller lig med :value.',
        'file'    => 'Dette felt skal være mindre eller lig med :value kilobytes.',
        'string'  => 'Dette felt skal være mindre eller lig med :value characters.',
        'array'   => 'Dette felt må ikke have mere end :value items.',
    ],
    'max'                  => [
        'numeric' => 'Dette felt skal være højest :max.',
        'file'    => 'Dette felt skal være højest :max kilobytes.',
        'string'  => 'Dette felt skal være højest :max tegn.',
        'array'   => 'Dette felt må ikke indeholde mere end :max elementer.',
    ],
    'mimes'                => 'Dette felt skal være en fil af typen: :values.',
    'mimetypes'            => 'Dette felt skal være en fil af typen: :values.',
    'min'                  => [
        'numeric' => 'Dette felt skal være mindst :min.',
        'file'    => 'Dette felt skal være mindst :min kilobytes.',
        'string'  => 'Dette felt skal være mindst :min tegn.',
        'array'   => 'Dette felt skal indeholde mindst :min elementer.',
    ],
    'not_in'               => 'Den valgte felt er ugyldig.',
    'not_regex'            => 'Dette felt format is invalid.',
    'numeric'              => 'Dette felt skal være et tal.',
    'present'              => 'Dette felt skal være tilstede.',
    'regex'                => 'Dette felt formatet er ugyldigt.',
    'required'             => 'Dette felt skal udfyldes.',
    'required_if'          => 'Dette felt skal udfyldes når :other er :value.',
    'required_unless'      => 'Dette felt er påkrævet med mindre :other findes i :values.',
    'required_with'        => 'Dette felt skal udfyldes når :values er udfyldt.',
    'required_with_all'    => 'Dette felt skal udfyldes når :values er udfyldt.',
    'required_without'     => 'Dette felt skal udfyldes når :values ikke er udfyldt.',
    'required_without_all' => 'Dette felt skal udfyldes når ingen af :values er udfyldt.',
    'same'                 => 'Dette felt og :other skal være ens.',
    'size'                 => [
        'numeric' => 'Dette felt skal være :size.',
        'file'    => 'Dette felt skal være :size kilobytes.',
        'string'  => 'Dette felt skal være :size tegn lang.',
        'array'   => 'Dette felt skal indeholde :size elementer.',
    ],
    'string'               => 'Dette felt skal være en streng.',
    'timezone'             => 'Dette felt skal være en gyldig tidszone.',
    'unique'               => 'Dette felt er allerede taget.',
    'uploaded'             => 'Dette felt fejlene i uploaden.',
    'url'                  => 'Dette felt formatet er ugyldigt.',

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
        'name'                  => 'navn',
        'username'              => 'bruger',
        'email'                 => 'e-mail',
        'first_name'            => 'navn',
        'last_name'             => 'efternavn',
        'surname'	            => 'efternavn',
        'password'              => 'adgangskode',
        'password_confirmation' => 'kodeords bekræftelse',
        'city'                  => 'by',
        'country'               => 'land',
        'address'               => 'adresse',
        'phone'                 => 'telefon',
        'mobile'                => 'mobiltelefon',
        'age'                   => 'alder',
        'sex'                   => 'køn',
        'gender'                => 'køn',
        'year'                  => 'år',
        'month'                 => 'måned',
        'day'                   => 'dag',
        'hour'                  => 'tid',
        'minute'                => 'minut',
        'second'                => 'sekund',
        'title'                 => 'titel',
        'content'               => 'indhold',
        'body'                  => 'indhold',
        'description'           => 'beskrivelse',
        'excerpt'               => 'abstrakt',
        'date'                  => 'dato',
        'time'                  => 'øjeblik',
        'subject'               => 'affære',
        'message'               => 'besked',
    ],
];
