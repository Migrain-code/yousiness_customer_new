<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines contain the default error messages used by
      | the validator class. Some of these rules have multiple versions such
      | such as the size rules. Feel free to tweak each of these messages.
      |
     */
    "accepted" => ":attribute muss akzeptiert werden.",
    "active_url" => ":attribute muss eine gültige URL sein.",
    "after" => ":attribute muss ein Datum nach :date sein.",
    "alpha" => ":attribute darf nur Buchstaben enthalten.",
    "alpha_dash" => ":attribute darf nur Buchstaben, Zahlen und Bindestriche enthalten.",
    "alpha_num" => ":attribute darf nur Buchstaben und Zahlen enthalten.",
    "array" => ":attribute muss ein Array sein.",
    "before" => ":attribute muss ein Datum vor :date sein.",
    "between" => [
        "numeric" => ":attribute muss zwischen :min und :max liegen.",
        "file" => ":attribute muss zwischen :min und :max Kilobyte groß sein.",
        "string" => ":attribute muss zwischen :min und :max Zeichen lang sein.",
        "array" => ":attribute muss zwischen :min und :max Elemente haben."
    ],
    "confirmed" => ":attribute Bestätigung stimmt nicht überein.",
    "date" => ":attribute muss ein gültiges Datum sein.",
    "date_format" => ":attribute entspricht nicht dem Format :format.",
    "different" => ":attribute und :other müssen unterschiedlich sein.",
    "digits" => ":attribute muss :digits Ziffern haben.",
    "digits_between" => ":attribute muss zwischen :min und :max Ziffern haben.",
    "email" => ":attribute muss eine gültige E-Mail-Adresse sein.",
    "exists" => "Ausgewähltes :attribute ist ungültig.",
    "image" => ":attribute muss ein Bild sein.",
    "in" => "Ausgewähltes :attribute ist ungültig.",
    "integer" => ":attribute muss eine ganze Zahl sein.",
    "ip" => ":attribute muss eine gültige IP-Adresse sein.",
    "max" => [
        "numeric" => ":attribute darf nicht größer als :max sein.",
        "file" => ":attribute darf nicht größer als :max Kilobyte sein.",
        "string" => ":attribute darf nicht länger als :max Zeichen sein.",
        "array" => ":attribute darf nicht mehr als :max Elemente haben."
    ],
    "mimes" => ":attribute muss eine Datei des Typs :values sein.",
    "min" => [
        "numeric" => ":attribute muss mindestens :min sein.",
        "file" => ":attribute muss mindestens :min Kilobyte groß sein.",
        "string" => ":attribute muss mindestens :min Zeichen lang sein.",
        "array" => ":attribute muss mindestens :min Elemente haben."
    ],
    "not_in" => "Ausgewähltes :attribute ist ungültig.",
    "numeric" => ":attribute muss eine Zahl sein.",
    "regex" => ":attribute Format ist ungültig.",
    "required" => ":attribute ist ein Pflichtfeld.",
    "required_if" => ":attribute ist erforderlich, wenn :other :value ist.",
    "required_with" => ":attribute ist erforderlich, wenn :values vorhanden ist.",
    "required_with_all" => ":attribute ist erforderlich, wenn :values vorhanden ist.",
    "required_without" => ":attribute ist erforderlich, wenn :values nicht vorhanden ist.",
    "required_without_all" => ":attribute ist erforderlich, wenn keine der :values vorhanden ist.",
    "same" => ":attribute und :other müssen übereinstimmen.",
    "size" => [
        "numeric" => ":attribute muss :size sein.",
        "file" => ":attribute muss :size Kilobyte groß sein.",
        "string" => ":attribute muss :size Zeichen lang sein.",
        "array" => ":attribute muss :size Elemente haben."
    ],
    "unique" => ":attribute wurde bereits verwendet.",
    "url" => ":attribute Format ist ungültig.",
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
    'custom' => [],
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
    'attributes' => [],
];
