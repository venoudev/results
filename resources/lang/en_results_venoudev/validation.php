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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => '[ERR_AFTER_DATE] # [:attribute] # The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => '[ERR_ARRAY] # [:attribute] The :attribute must be an array.',
    'before' => '[ERR_BEFORE_DATE] # [:attribute] # The :attribute must be a date before :date.',
    'before_or_equal' => '[ERR_BEFORE_EQUAL_DATE] # [:attribute] The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => '[ERR_BETWEEN_NUMERIC] # [:attribute] # The :attribute must be between :min and :max.',
        'file' => '[ERR_BETWEEN_FILE] # [:attribute] # The :attribute must be between :min and :max kilobytes.',
        'string' => '[ERR_BETWEEN_STRING] # [:attribute] # The :attribute must be between :min and :max characters.',
        'array' => '[ERR_BETWEEN_ARRAY] # [:attribute] # The :attribute must have between :min and :max items.',
    ],
    'boolean' => '[ERR_BOOLEAN] # [:attribute] # The :attribute field must be true or false.',
    'confirmed' => '[ERR_CONFIRMED] # [:attribute] # The :attribute confirmation does not match.',
    'date' => '[ERR_DATE] # [:attribute] # The :attribute is not a valid date.',
    'date_equals' => '[ERR_DATE_EQUALS] # [:attribute] # The :attribute must be a date equal to :date.',
    'date_format' => '[ERR_DATE_FORMAT] # [:attribute] # The :attribute does not match the format :format.',
    'different' => '[ERR_DATE_DIFFERENT] # [:attribute] # The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => '[ERR_DISTINCT] # [:attribute] # The :attribute field has a duplicate value.',
    'email' => '[ERR_EMAIL] # [:attribute] # The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => '[ERR_EXISTS] # [:attribute] # The selected :attribute is invalid.',
    'file' => '[ERR_FILE] # [:attribute] # The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => '[ERR_GREATER_THAN_NUMERIC] # [:attribute] # The :attribute must be greater than :value.',
        'file' => '[ERR_GREATER_THAN_FILE] # [:attribute] # The :attribute must be greater than :value kilobytes.',
        'string' => '[ERR_GREATER_THAN_STRING] # [:attribute] # The :attribute must be greater than :value characters.',
        'array' => '[ERR_GREATER_THAN_ARRAY] # [:attribute] # The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => '[ERR_IMAGE] # [:attribute] # The :attribute must be an image.',
    'in' => '[ERR_IN] # [:attribute] # The selected :attribute is invalid.',
    'in_array' => '[ERR_IN_ARRAY] # [:attribute] # The :attribute field does not exist in :other.',
    'integer' => '[ERR_INTEGER] # [:attribute] # The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => '[ERR_MAX_NUMERIC] # [:attribute] # The :attribute may not be greater than :max.',
        'file' => '[ERR_MAX_FILE] # [:attribute] # The :attribute may not be greater than :max kilobytes.',
        'string' => '[ERR_MAX_STRING] # [:attribute] # The :attribute may not be greater than :max characters.',
        'array' => '[ERR_MAX_ARRAY] # [:attribute] # The :attribute may not have more than :max items.',
    ],
    'mimes' => '[ERR_MAX_ARRAY] # [:attribute] # The :attribute must be a file of type: :values.',
    'mimetypes' => '[ERR_MIMES_TYPES] # [:attribute] # The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => '[ERR_MIN_NUMERIC] # [:attribute] # The :attribute must be at least :min.',
        'file' => '[ERR_MIN_FILE] # [:attribute] # The :attribute must be at least :min kilobytes.',
        'string' => '[ERR_MIN_STRING] # [:attribute] # The :attribute must be at least :min characters.',
        'array' => '[ERR_MIN_ARRAY] # [:attribute] # The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => '[ERR_NUMERIC] # [:attribute] # The :attribute must be a number.',
    'password' => '[ERR_PASSWORD] # [:attribute] # The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => '[ERR_REQUIRED] # [:attribute] # The :attribute field is required.',
    'required_if' => '[ERR_REQUIRED_IF] # [:attribute] # The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => '[ERR_REQUIRED_WITH] # [:attribute] # The :attribute field is required when :values is present.',
    'required_with_all' => '[ERR_REQUIRED_WITH_ALL] # [:attribute] # The :attribute field is required when :values are present.',
    'required_without' => '[ERR_REQUIRED_WITHOUT] # [:attribute] # The :attribute field is required when :values is not present.',
    'required_without_all' => '[ERR_REQUIRED_WITHOUT_ALL] # [:attribute] # The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => '[ERR_STRING] # [:attribute] # The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => '[ERR_UNIQUE] # [:attribute] # The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
