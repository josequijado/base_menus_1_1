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

    'accepted'             => 'Acest câmp trebuie să fie acceptat.',
    'active_url'           => 'Acest câmp nu este un URL valid.',
    'after'                => 'Acest câmp trebuie să fie o dată după :date.',
    'after_or_equal'       => 'Acest câmp trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha'                => 'Acest câmp poate conține doar litere.',
    'alpha_dash'           => 'Acest câmp poate conține doar litere, numere și cratime.',
    'alpha_num'            => 'Acest câmp poate conține doar litere și numere.',
    'array'                => 'Acest câmp trebuie să fie un array.',
    'before'               => 'Acest câmp trebuie să fie o dată înainte de :date.',
    'before_or_equal'      => 'Acest câmp trebuie să fie o dată înainte sau egală cu :date.',
    'between'              => [
        'numeric' => 'Acest câmp trebuie să fie între :min și :max.',
        'file'    => 'Acest câmp trebuie să fie între :min și :max kiloocteți.',
        'string'  => 'Acest câmp trebuie să fie între :min și :max caractere.',
        'array'   => 'Acest câmp trebuie să aibă între :min și :max elemente.',
    ],
    'boolean'              => 'Acest câmp trebuie să fie adevărat sau fals.',
    'confirmed'            => 'Confirmarea acest câmp nu se potrivește.',
    'date'                 => 'Acest câmp nu este o dată validă.',
    'date_format'          => 'Acest câmp trebuie să fie în formatul :format.',
    'different'            => 'Acest câmp și :other trebuie să fie diferite.',
    'digits'               => 'Acest câmp trebuie să aibă :digits cifre.',
    'digits_between'       => 'Acest câmp trebuie să aibă între :min și :max cifre.',
    'dimensions'           => 'Acest câmp are dimensiuni de imagine nevalide.',
    'distinct'             => 'Acest câmp are o valoare duplicat.',
    'email'                => 'Acest câmp trebuie să fie o adresă de e-mail validă.',
    'exists'               => 'Acest câmp selectat nu este valid.',
    'file'                 => 'Acest câmp trebuie să fie un fișier.',
    'filled'               => 'Acest câmp trebuie completat.',
    'gt'                   => [
        'numeric' => 'Acest câmp trebuie să fie mai mare de :value.',
        'file'    => 'Acest câmp trebuie să fie mai mare de :value kilobyți.',
        'string'  => 'Acest câmp trebuie să fie mai mare de :value caractere.',
        'array'   => 'Acest câmp trebuie să aibă mai multe de :value elemente.',
    ],
    'gte'                  => [
        'numeric' => 'Acest câmp trebuie să fie mai mare sau egal cu :value.',
        'file'    => 'Acest câmp trebuie să fie mai mare sau egal cu :value kilobyți.',
        'string'  => 'Acest câmp trebuie să fie mai mare sau egal cu :value caractere.',
        'array'   => 'Acest câmp trebuie să aibă :value elemente sau mai multe.',
    ],
    'image'                => 'Acest câmp trebuie să fie o imagine.',
    'in'                   => 'Acest câmp selectat nu este valid.',
    'in_array'             => 'Această valoare nu este permisă.',
    'integer'              => 'Acest câmp trebuie să fie un număr întreg.',
    'ip'                   => 'Acest câmp trebuie să fie o adresă IP validă.',
    'ipv4'                 => 'Acest câmp trebuie să fie o adresă IPv4 validă.',
    'ipv6'                 => 'Acest câmp trebuie să fie o adresă IPv6 validă.',
    'json'                 => 'Acest câmp trebuie să fie un string JSON valid.',
    'lt'                   => [
        'numeric' => 'Acest câmp trebuie să fie mai mic de :value.',
        'file'    => 'Acest câmp trebuie să fie mai mic de :value kilobyți.',
        'string'  => 'Acest câmp trebuie să fie mai mic de :value caractere.',
        'array'   => 'Acest câmp trebuie să aibă mai puțin de :value elemente.',
    ],
    'lte'                  => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value.',
        'file'    => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value kilobyți.',
        'string'  => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value caractere.',
        'array'   => 'Câmpul :attribute trebuie să aibă :value elemente sau mai puține.',
    ],
    'max'                  => [
        'numeric' => 'Acest câmp nu poate fi mai mare de :max.',
        'file'    => 'Acest câmp nu poate avea mai mult de :max kiloocteți.',
        'string'  => 'Acest câmp nu poate avea mai mult de :max caractere.',
        'array'   => 'Acest câmp nu poate avea mai mult de :max elemente.',
    ],
    'mimes'                => 'Acest câmp trebuie să fie un fișier de tipul: :values.',
    'mimetypes'            => 'Acest câmp trebuie să fie un fișier de tipul: :values.',
    'min'                  => [
        'numeric' => 'Acest câmp nu poate fi mai mic de :min.',
        'file'    => 'Acest câmp trebuie să aibă cel puțin :min kiloocteți.',
        'string'  => 'Acest câmp trebuie să aibă cel puțin :min caractere.',
        'array'   => 'Acest câmp trebuie să aibă cel puțin :min elemente.',
    ],
    'not_in'               => 'Acest câmp selectat nu este valid.',
    'not_regex'            => 'Acest câmp nu are un format valid.',
    'numeric'              => 'Acest câmp trebuie să fie un număr.',
    'present'              => 'Acest câmp trebuie să fie prezent.',
    'regex'                => 'Acest câmp nu are un format valid.',
    'required'             => 'Acest câmp este obligatoriu.',
    'required_if'          => 'Acest câmp este necesar când :other este :value.',
    'required_unless'      => 'Acest câmp este necesar, cu excepția cazului :other este in :values.',
    'required_with'        => 'Acest câmp este necesar când există :values.',
    'required_with_all'    => 'Acest câmp este necesar când există :values.',
    'required_without'     => 'Acest câmp este necesar când nu există :values.',
    'required_without_all' => 'Acest câmp este necesar când niciunul(una) dintre :values nu există.',
    'same'                 => 'Acest câmp și :other trebuie să fie identice.',
    'size'                 => [
        'numeric' => 'Acest câmp trebuie să fie :size.',
        'file'    => 'Acest câmp trebuie să aibă :size kiloocteți.',
        'string'  => 'Acest câmp trebuie să aibă :size caractere.',
        'array'   => 'Acest câmp trebuie să aibă :size elemente.',
    ],
    'string'               => 'Acest câmp trebuie să fie string.',
    'timezone'             => 'Acest câmp trebuie să fie un fus orar valid.',
    'unique'               => 'Acest câmp a fost deja folosit.',
    'uploaded'             => 'Acest câmp nu a reușit încărcarea.',
    'url'                  => 'Acest câmp nu este un URL valid.',

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
        'name'                  => 'nume',
        'username'              => 'utilizator',
        'email'                 => 'e-mail',
        'first_name'            => 'nume',
        'last_name'             => 'numele de familie',
        'surname'	            => 'numele de familie',
        'password'              => 'parola',
        'password_confirmation' => 'confirmarea parolei',
        'city'                  => 'oraș',
        'country'               => 'țară',
        'address'               => 'adresa',
        'phone'                 => 'telefon',
        'mobile'                => 'mobil',
        'age'                   => 'vârsta',
        'sex'                   => 'sex',
        'gender'                => 'gen',
        'year'                  => 'an',
        'month'                 => 'lună',
        'day'                   => 'zi',
        'hour'                  => 'ora',
        'minute'                => 'minut',
        'second'                => 'secunde',
        'title'                 => 'titlu',
        'content'               => 'conţinut',
        'body'                  => 'conţinut',
        'description'           => 'descriere',
        'excerpt'               => 'rezumat',
        'date'                  => 'data',
        'time'                  => 'ora',
        'subject'               => 'afacere',
        'message'               => 'mesaj',
    ],
];
