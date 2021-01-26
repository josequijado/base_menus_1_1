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

    'accepted'             => 'Dieses feld muss akzeptiert werden.',
    'active_url'           => 'Dieses feld ist keine gültige Internet-Adresse.',
    'after'                => 'Dieses feld muss ein Datum nach dem :date sein.',
    'after_or_equal'       => 'Dieses feld muss ein Datum nach dem :date oder gleich dem :date sein.',
    'alpha'                => 'Dieses feld darf nur aus Buchstaben bestehen.',
    'alpha_dash'           => 'Dieses feld darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.',
    'alpha_num'            => 'Dieses feld darf nur aus Buchstaben und Zahlen bestehen.',
    'array'                => 'Dieses feld muss ein Array sein.',
    'before'               => 'Dieses feld muss ein Datum vor dem :date sein.',
    'before_or_equal'      => 'Dieses feld muss ein Datum vor dem :date oder gleich dem :date sein.',
    'between'              => [
        'numeric' => 'Dieses feld muss zwischen :min & :max liegen.',
        'file'    => 'Dieses feld muss zwischen :min & :max Kilobytes groß sein.',
        'string'  => 'Dieses feld muss zwischen :min & :max Zeichen lang sein.',
        'array'   => 'Dieses feld muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'              => "Dieses feld muss entweder 'true' oder 'false' sein.",
    'confirmed'            => 'Dieses feld stimmt nicht mit der Bestätigung überein.',
    'date'                 => 'Dieses feld muss ein gültiges Datum sein.',
    'date_format'          => 'Dieses feld entspricht nicht dem gültigen Format für :format.',
    'different'            => 'Dieses feld und :other müssen sich unterscheiden.',
    'digits'               => 'Dieses feld muss :digits Stellen haben.',
    'digits_between'       => 'Dieses feld muss zwischen :min und :max Stellen haben.',
    'dimensions'           => 'Dieses feld hat ungültige Bildabmessungen.',
    'distinct'             => 'Dieses feld beinhaltet einen bereits vorhandenen Wert.',
    'email'                => 'Dieses feld muss eine gültige E-Mail-Adresse sein.',
    'exists'               => 'Der gewählte Wert für dieses feld ist ungültig.',
    'file'                 => 'Dieses feld muss eine Datei sein.',
    'filled'               => 'Dieses feld muss ausgefüllt sein.',
    'gt'                   => [
        'numeric' => 'Dieses feld muss mindestens :value sein.',
        'file'    => 'Dieses feld muss mindestens :value Kilobytes groß sein.',
        'string'  => 'Dieses feld muss mindestens :value Zeichen lang sein.',
        'array'   => 'Dieses feld muss mindestens :value Elemente haben.',
    ],
    'gte'                  => [
        'numeric' => 'Dieses feld muss größer oder gleich :value sein.',
        'file'    => 'Dieses feld muss größer oder gleich :value Kilobytes sein.',
        'string'  => 'Dieses feld muss größer oder gleich :value Zeichen lang sein.',
        'array'   => 'Dieses feld muss größer oder gleich :value Elemente haben.',
    ],
    'image'                => 'Dieses feld muss ein Bild sein.',
    'in'                   => 'Der gewählte Wert für dieses feld ist ungültig.',
    'in_array'             => 'Dieser Wert ist nicht zulässig.',
    'integer'              => 'Dieses feld muss eine ganze Zahl sein.',
    'ip'                   => 'Dieses feld muss eine gültige IP-Adresse sein.',
    'ipv4'                 => 'Dieses feld muss eine gültige IPv4-Adresse sein.',
    'ipv6'                 => 'Dieses feld muss eine gültige IPv6-Adresse sein.',
    'json'                 => 'Dieses feld muss ein gültiger JSON-String sein.',
    'lt'                   => [
        'numeric' => 'Dieses feld muss kleiner :value sein.',
        'file'    => 'Dieses feld muss kleiner :value Kilobytes groß sein.',
        'string'  => 'Dieses feld muss kleiner :value Zeichen lang sein.',
        'array'   => 'Dieses feld muss kleiner :value Elemente haben.',
    ],
    'lte'                  => [
        'numeric' => 'Dieses feld muss kleiner oder gleich :value sein.',
        'file'    => 'Dieses feld muss kleiner oder gleich :value Kilobytes sein.',
        'string'  => 'Dieses feld muss kleiner oder gleich :value Zeichen lang sein.',
        'array'   => 'Dieses feld muss kleiner oder gleich :value Elemente haben.',
    ],
    'max'                  => [
        'numeric' => 'Dieses feld darf maximal :max sein.',
        'file'    => 'Dieses feld darf maximal :max Kilobytes groß sein.',
        'string'  => 'Dieses feld darf maximal :max Zeichen haben.',
        'array'   => 'Dieses feld darf nicht mehr als :max Elemente haben.',
    ],
    'mimes'                => 'Dieses feld muss den Dateityp :values haben.',
    'mimetypes'            => 'Dieses feld muss den Dateityp :values haben.',
    'min'                  => [
        'numeric' => 'Dieses feld muss mindestens :min sein.',
        'file'    => 'Dieses feld muss mindestens :min Kilobytes groß sein.',
        'string'  => 'Dieses feld muss mindestens :min Zeichen lang sein.',
        'array'   => 'Dieses feld muss mindestens :min Elemente haben.',
    ],
    'not_in'               => 'Der gewählte Wert für dieses feld ist ungültig.',
    'not_regex'            => 'Dieses feld hat ein ungültiges Format.',
    'numeric'              => 'Dieses feld muss eine Zahl sein.',
    'present'              => 'Dieses feld muss vorhanden sein.',
    'regex'                => 'Dieses feld Format ist ungültig.',
    'required'             => 'Dieses feld muss ausgefüllt sein.',
    'required_if'          => 'Dieses feld muss ausgefüllt sein, wenn :other :value ist.',
    'required_unless'      => 'Dieses feld muss ausgefüllt sein, wenn :other nicht :values ist.',
    'required_with'        => 'Dieses feld muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => 'Dieses feld muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without'     => 'Dieses feld muss angegeben werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => 'Dieses feld muss angegeben werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same'                 => 'Dieses feld und :other müssen übereinstimmen.',
    'size'                 => [
        'numeric' => 'Dieses feld muss gleich :size sein.',
        'file'    => 'Dieses feld muss :size Kilobyte groß sein.',
        'string'  => 'Dieses feld muss :size Zeichen lang sein.',
        'array'   => 'Dieses feld muss genau :size Elemente haben.',
    ],
    'string'               => 'Dieses feld muss ein String sein.',
    'timezone'             => 'Dieses feld muss eine gültige Zeitzone sein.',
    'unique'               => 'Dieses feld ist schon vergeben.',
    'uploaded'             => 'Dieses feld konnte nicht hochgeladen werden.',
    'url'                  => 'Dieses feld muss eine URL sein.',

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
        'name'                  => 'Name',
        'username'              => 'Benutzername',
        'email'                 => 'E-Mail-Adresse',
        'first_name'            => 'Vorname',
        'last_name'             => 'Nachname',
        'surname'             	=> 'Nachname',
        'password'              => 'Passwort',
        'password_confirmation' => 'Passwort-Bestätigung',
        'city'                  => 'Stadt',
        'country'               => 'Land',
        'address'               => 'Adresse',
        'phone'                 => 'Telefonnummer',
        'mobile'                => 'Handynummer',
        'age'                   => 'Alter',
        'sex'                   => 'Geschlecht',
        'gender'                => 'Geschlecht',
        'day'                   => 'Tag',
        'month'                 => 'Monat',
        'year'                  => 'Jahr',
        'hour'                  => 'Stunde',
        'minute'                => 'Minute',
        'second'                => 'Sekunde',
        'title'                 => 'Titel',
        'content'               => 'Inhalt',
        'description'           => 'Beschreibung',
        'excerpt'               => 'Auszug',
        'date'                  => 'Datum',
        'time'                  => 'Uhrzeit',
        'available'             => 'verfügbar',
        'size'                  => 'Größe',
    ],
];
