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

    'accepted' => 'ACCEPTED # :attribute # The :attribute must be accepted.',
    'active_url' => 'ACTIVE_URL # :attribute # The :attribute is not a valid URL.',
    'after' => 'AFTER_DATE # :attribute # The :attribute must be a date after :date.',
    'after_or_equal' => 'AFTER_OR_EQUAL # :attribute # The :attribute must be a date after or equal to :date.',
    'alpha' => 'ALPHA # :attribute # The :attribute may only contain letters.',
    'alpha_dash' => 'ALPHA_DASH # :attribute # The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'ALPHA_NUM # :attribute # The :attribute may only contain letters and numbers.',
    'array' => 'ARRAY # :attribute # The :attribute must be an array.',
    'before' => 'BEFORE_DATE # :attribute # The :attribute must be a date before :date.',
    'before_or_equal' => 'BEFORE_EQUAL_DATE # :attribute # The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'BETWEEN_NUMERIC # :attribute # The :attribute must be between :min and :max.',
        'file' => 'BETWEEN_FILE # :attribute # The :attribute must be between :min and :max kilobytes.',
        'string' => 'BETWEEN_STRING # :attribute # The :attribute must be between :min and :max characters.',
        'array' => 'BETWEEN_ARRAY # :attribute # The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'BOOLEAN # :attribute # The :attribute field must be true or false.',
    'confirmed' => 'CONFIRMED # :attribute # The :attribute confirmation does not match.',
    'date' => 'DATE # :attribute # The :attribute is not a valid date.',
    'date_equals' => 'DATE_EQUALS # :attribute # The :attribute must be a date equal to :date.',
    'date_format' => 'DATE_FORMAT # :attribute # The :attribute does not match the format :format.',
    'different' => 'DATE_DIFFERENT # :attribute # The :attribute and :other must be different.',
    'digits' => 'DIGITS # :attribute # The :attribute must be :digits digits.',
    'digits_between' => 'DIGITS_BETWEEN # :attribute # The :attribute must be between :min and :max digits.',
    'dimensions' => 'DIMENSIONS # :attribute # The :attribute has invalid image dimensions.',
    'distinct' => 'DISTINCT # :attribute # The :attribute field has a duplicate value.',
    'email' => 'EMAIL # :attribute # The :attribute must be a valid email address.',
    'ends_with' => 'ENDS_WITH # :attribute # The :attribute must end with one of the following: :values.',
    'exists' => 'EXISTS # :attribute # The selected :attribute is invalid.',
    'file' => 'FILE # :attribute # The :attribute must be a file.',
    'filled' => 'FILLED # :attribute # The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'GREATER_THAN_NUMERIC # :attribute # The :attribute must be greater than :value.',
        'file' => 'GREATER_THAN_FILE # :attribute # The :attribute must be greater than :value kilobytes.',
        'string' => 'GREATER_THAN_STRING # :attribute # The :attribute must be greater than :value characters.',
        'array' => 'GREATER_THAN_ARRAY # :attribute # The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'GREATER_THAN_OR_EQUAL_NUMERIC # :attribute # The :attribute must be greater than or equal :value.',
        'file' => 'GREATER_THAN_OR_EQUAL_FILE # :attribute # The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'GREATER_THAN_OR_EQUAL_STRING # :attribute # The :attribute must be greater than or equal :value characters.',
        'array' => 'GREATER_THAN_OR_EQUAL_ARRAY # :attribute # The :attribute must have :value items or more.',
    ],
    'image' => 'IMAGE # :attribute # The :attribute must be an image.',
    'in' => 'IN # :attribute # The selected :attribute is invalid.',
    'in_array' => 'IN_ARRAY # :attribute # The :attribute field does not exist in :other.',
    'integer' => 'INTEGER # :attribute # The :attribute must be an integer.',
    'ip' => 'IP # :attribute # The :attribute must be a valid IP address.',
    'ipv4' => 'IPV4 # :attribute # The :attribute must be a valid IPv4 address.',
    'ipv6' => 'IPV6 # :attribute # The :attribute must be a valid IPv6 address.',
    'json' => 'JSON # :attribute # The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'LESS_THAN_NUMERIC # :attribute # The :attribute must be less than :value.',
        'file' => 'LESS_THAN_FILE # :attribute # The :attribute must be less than :value kilobytes.',
        'string' => 'LESS_THAN_STRING # :attribute # The :attribute must be less than :value characters.',
        'array' => 'LESS_THAN_ARRAY # :attribute # The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'LESS_THAN_OR_EQUAL_NUMERIC # :attribute # The :attribute must be less than or equal :value.',
        'file' => 'LESS_THAN_OR_EQUAL_FILE # :attribute # The :attribute must be less than or equal :value kilobytes.',
        'string' => 'LESS_THAN_OR_EQUAL_STRING # :attribute # The :attribute must be less than or equal :value characters.',
        'array' => 'LESS_THAN_OR_EQUAL_ARRAY # :attribute # The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'MAX_NUMERIC # :attribute # The :attribute may not be greater than :max.',
        'file' => 'MAX_FILE # :attribute # The :attribute may not be greater than :max kilobytes.',
        'string' => 'MAX_STRING # :attribute # The :attribute may not be greater than :max characters.',
        'array' => 'MAX_ARRAY # :attribute # The :attribute may not have more than :max items.',
    ],
    'mimes' => 'MAX_ARRAY # :attribute # The :attribute must be a file of type: :values.',
    'mimetypes' => 'MIMES_TYPES # :attribute # The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'MIN_NUMERIC # :attribute # The :attribute must be at least :min.',
        'file' => 'MIN_FILE # :attribute # The :attribute must be at least :min kilobytes.',
        'string' => 'MIN_STRING # :attribute # The :attribute must be at least :min characters.',
        'array' => 'MIN_ARRAY # :attribute # The :attribute must have at least :min items.',
    ],
    'not_in' => 'NOT_IN # :attribute # The selected :attribute is invalid.',
    'not_regex' => 'NOT_REGEX # :attribute # The :attribute format is invalid.',
    'numeric' => 'NUMERIC # :attribute # The :attribute must be a number.',
    'password' => 'PASSWORD # :attribute # The password is incorrect.',
    'present' => 'PRESENT # :attribute # The :attribute field must be present.',
    'regex' => 'REGEX # :attribute # The :attribute format is invalid.',
    'required' => 'REQUIRED # :attribute # The :attribute field is required.',
    'required_if' => 'REQUIRED_IF # :attribute # The :attribute field is required when :other is :value.',
    'required_unless' => 'REQUIRED_UNLESS # :attribute # The :attribute field is required unless :other is in :values.',
    'required_with' => 'REQUIRED_WITH # :attribute # The :attribute field is required when :values is present.',
    'required_with_all' => 'REQUIRED_WITH_ALL # :attribute # The :attribute field is required when :values are present.',
    'required_without' => 'REQUIRED_WITHOUT # :attribute # The :attribute field is required when :values is not present.',
    'required_without_all' => 'REQUIRED_WITHOUT_ALL # :attribute # The :attribute field is required when none of :values are present.',
    'same' => 'SAME # :attribute # The :attribute and :other must match.',
    'size' => [
        'numeric' => 'SIZE_NUMERIC # :attribute # The :attribute must be :size.',
        'file' => 'SIZE_FILE # :attribute # The :attribute must be :size kilobytes.',
        'string' => 'SIZE_STRING # :attribute # The :attribute must be :size characters.',
        'array' => 'SIZE_ARRAY # :attribute # The :attribute must contain :size items.',
    ],
    'starts_with' => 'STARTS_WITH # :attribute # The :attribute must start with one of the following: :values.',
    'string' => 'STRING # :attribute # The :attribute must be a string.',
    'timezone' => 'TIMEZONE # :attribute # The :attribute must be a valid zone.',
    'unique' => 'UNIQUE # :attribute # The :attribute has already been taken.',
    'uploaded' => 'UPLOAD # :attribute # The :attribute failed to upload.',
    'url' => 'URL # :attribute # The :attribute format is invalid.',
    'uuid' => 'UUID # :attribute # The :attribute must be a valid UUID.',

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
