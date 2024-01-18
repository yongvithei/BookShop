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

    'accepted' => 'វាល :attribute ត្រូវតែត្រឹមត្រូវ។',
    'accepted_if' => 'វាល :attribute ត្រូវតែត្រឹមត្រូវនៅពេល :other មានតម្លៃ :value។',
    'active_url' => 'វាល :attribute ត្រូវតែជាទំព័រ URL ត្រឹមត្រូវ។',
    'after' => 'វាល :attribute ត្រូវតែជាកាលបរិច្ឆេទបន្ទាប់ពី :date។',
    'after_or_equal' => 'វាល :attribute ត្រូវតែជាកាលបរិច្ឆេទបន្ទាប់ពីឬស្មើ :date។',
    'alpha' => 'វាល :attribute ត្រូវតែមានតួអក្សរតែប៉ុណ្ណោះ។',
    'alpha_dash' => 'វាល :attribute ត្រូវតែមានតួអក្សរ, លេខ, សញ្ញា "-", និងសញ្ញា "_"។',
    'alpha_num' => 'វាល :attribute ត្រូវតែមានតួអក្សរ និង លេខប៉ុណ្ណោះ។',
    'array' => 'វាល :attribute ត្រូវតែជាសំណុំ។',
    'ascii' => 'វាល :attribute ត្រូវតែជាអក្សរតែប៉ុណ្ណោះ និង នយោល ASCII។',
    'before' => 'វាល :attribute ត្រូវតែជាកាលបរិច្ឆេទមុន :date។',
    'before_or_equal' => 'វាល :attribute ត្រូវតែជាកាលបរិច្ឆេទមុនឬស្មើ :date។',
    'between' => [
        'array' => 'វាល :attribute ត្រូវតែមានចំនួនធាតុចូលរួមនៅចំនួន :min និង :max។',
        'file' => 'វាល :attribute ត្រូវតែមានទំហំចន្លោះពី :min ដល់ :max គត់ឃើញ។',
        'numeric' => 'វាល :attribute ត្រូវតែស្ថិតនៅចន្លោះពី :min ដល់ :max។',
        'string' => 'វាល :attribute ត្រូវតែមានចំនួនតួអក្សរពី :min ដល់ :max។',
    ],
    'boolean' => 'វាល :attribute ត្រូវតែជាត្រឹមត្រូវ ឬ មិនត្រឹមត្រូវ។',
    'can' => 'វាល :attribute មានតម្លៃដែលមិនត្រូវនេះ។',
    'confirmed' => 'ការបញ្ជាក់វាល :attribute មិនត្រូវគ្នាទេ។',
    'current_password' => 'ពាក្យសម្ងាត់បច្ចុប្បន្នរបស់អ្នកគឺមិនត្រឹមត្រូវ។',
    'date' => 'វាល :attribute ត្រូវតែជាកាលបរិច្ឆេទត្រឹមត្រូវ។',
    'date_equals' => 'វាល :attribute ត្រូវតែជាកាលបរិច្ឆេទដែលស្មើនឹង :date។',
    'date_format' => 'វាល :attribute មិនត្រូវគ្នាជាទម្រង់ :format។',
    'decimal' => 'វាល :attribute ត្រូវតែមាន :decimal ទសភាគ។',
    'declined' => 'វាល :attribute ត្រូវតែមិនត្រឹមត្រូវ។',
    'declined_if' => 'វាល :attribute ត្រូវតែមិនត្រឹមត្រូវពេល :other មានតម្លៃ :value។',
    'different' => 'វាល :attribute ត្រូវតែមិនដូចគ្នាជានិច្ច។ :other។',
    'digits' => 'វាល :attribute ត្រូវតែមាន :digits ខ្ទង់ប៉ុណ្ណោះ។',
    'digits_between' => 'វាល :attribute ត្រូវតែមានចំនួនខ្ទង់បន្ទាប់ពី :min រហូតដល់ :max ខ្ទង់។',
    'dimensions' => 'វាល :attribute មានវិមាត្តភាពរូបភាពមិនត្រឹមត្រូវ។',
    'distinct' => 'វាល :attribute មានតម្លៃស្ទួន។',
    'doesnt_end_with' => 'វាល :attribute ត្រូវតែមិនបញ្ចប់ដោយមួយពាក់នេះទេ: :values។',
    'doesnt_start_with' => 'វាល :attribute ត្រូវតែមិនចាប់ផ្ដើមដោយមួយពាក់នេះទេ: :values។',
    'email' => 'វាល :attribute ត្រូវតែជាអាសយដ្ឋានអ៊ីម៉ែលត្រឹមត្រូវ។',
    'ends_with' => 'វាល :attribute ត្រូវតែបញ្ចប់ដោយមួយពាក់នេះទេ: :values។',
    'enum' => 'វាល :attribute ដែលបានជ្រើសរើសគឺមិនត្រឹមត្រូវ។',
    'exists' => 'វាល :attribute ដែលបានជ្រើសរើសគឺមិនត្រឹមត្រូវ។',
    'file' => 'វាល :attribute ត្រូវតែជាឯកសារ។',
    'filled' => 'វាល :attribute ត្រូវតែមានតម្លៃ។',
    'gt' => [
        'array' => 'វាល :attribute ត្រូវតែមានធាតុច្រើនជាង :value។',
        'file' => 'វាល :attribute ត្រូវតែច្រើនជាង :value គត់ឃើញដោយខ្លួនឯង។',
        'numeric' => 'វាល :attribute ត្រូវតែមិនតូចជាង :value។',
        'string' => 'វាល :attribute ត្រូវតែមិនតូចជាង :value តួអក្សរ។',
    ],
    'gte' => [
        'array' => ':attribute ត្រូវតែមានច្រើនជាង :value ធាតុឬច្រើន',
        'file' => ':attribute ត្រូវតែធំជាងឬស្មើនឹង :value គីឡូបៃតង់',
        'numeric' => ':attribute ត្រូវតែធំជាងឬស្មើនឹង :value',
        'string' => ':attribute ត្រូវតែធំជាងឬស្មើនឹង :value តួអក្សរ',
    ],
    'image' => ':attribute ត្រូវតែជារូបភាព',
    'in' => 'ការជ្រើសរើស :attribute ដែលបានជ្រើសរើសគឺមិនត្រឹមត្រូវ',
    'in_array' => ':attribute ត្រូវតែមានក្នុង :other',
    'integer' => ':attribute ត្រូវតែជាចំនួនគត់',
    'ip' => ':attribute ត្រូវតែជាអាសយដ្ឋាន IP ត្រឹមត្រូវ',
    'ipv4' => ':attribute ត្រូវតែជាអាសយដ្ឋាន IPv4 ត្រឹមត្រូវ',
    'ipv6' => ':attribute ត្រូវតែជាអាសយដ្ឋាន IPv6 ត្រឹមត្រូវ',
    'json' => ':attribute ត្រូវតែជាខ្សែ JSON ត្រឹមត្រូវ',
    'lowercase' => ':attribute ត្រូវតែជាអក្សរតូច',
    'lt' => [
        'array' => ':attribute ត្រូវតែមិនមានច្រើនជាង :value ធាតុ',
        'file' => ':attribute ត្រូវតែមិនលើសពី :value គីឡូបៃតង់',
        'numeric' => ':attribute ត្រូវតែមិនលើសពី :value',
        'string' => ':attribute ត្រូវតែមិនលើសពី :value តួអក្សរ',
    ],
    'lte' => [
        'array' => ':attribute ត្រូវមិនមានច្រើនជាង :value ធាតុ',
        'file' => ':attribute ត្រូវតែមិនលើសពី :value គីឡូបៃតង់',
        'numeric' => ':attribute ត្រូវតែមិនលើសពីឬស្មើនឹង :value',
        'string' => ':attribute ត្រូវតែមិនលើសពីឬស្មើនឹង :value តួអក្សរ',
    ],
    'mac_address' => ':attribute ត្រូវតែជាទិន្នន័យ MAC ត្រឹមត្រូវ',
    'max' => [
        'array' => ':attribute ត្រូវមិនមានច្រើនជាង :max ធាតុ',
        'file' => ':attribute ត្រូវមិនត្រូវលើសពី :max គីឡូបៃតង់',
        'numeric' => ':attribute ត្រូវមិនត្រូវលើសពី :max',
        'string' => ':attribute ត្រូវមិនត្រូវលើសពី :max តួអក្សរ',
    ],
    'max_digits' => ':attribute ត្រូវមិនត្រូវលើសពី :max ខ្ទង់',
    'mimes' => ':attribute ត្រូវតែជាឯកសារនៅប្រភេទ: :values',
    'mimetypes' => ':attribute ត្រូវតែជាឯកសារនៅប្រភេទ: :values',
    'min' => [
        'array' => ':attribute ត្រូវតែមានយ៉ាងហោចណាល់ :min ធាតុ',
        'file' => ':attribute ត្រូវតែយ៉ាងហោចណាល់ :min គីឡូបៃតង់',
        'numeric' => ':attribute ត្រូវតែយ៉ាងហោចណាល់ :min',
        'string' => ':attribute ត្រូវតែយ៉ាងហោចណាល់ :min តួអក្សរ',
    ],
    'min_digits' => ':attribute ត្រូវតែមានចំនួនលំហាត :min ខ្ទង់',
    'missing' => ':attribute ត្រូវតែបាត់បង់',
    'missing_if' => ':attribute ត្រូវតែបាត់បង់នៅពេល :other មានតម្លៃ :value',
    'missing_unless' => ':attribute ត្រូវតែបាត់បង់ ទោះបី :other មិនមានតម្លៃ :value',
    'missing_with' => ':attribute ត្រូវតែបាត់បង់នៅពេល :values មាន',
    'missing_with_all' => ':attribute ត្រូវតែបាត់បង់នៅពេល :values ទាំងអស់មាន',
    'multiple_of' => ':attribute ត្រូវតែជាចំនួនគត់នៃ :value',
    'not_in' => 'ជ្រើសរើស :attribute មិនត្រឹមត្រូវ',
    'not_regex' => 'ទម្រង់នៃ :attribute មិនត្រឹមត្រូវ',
    'numeric' => ':attribute ត្រូវតែជាលេខ',
    'password' => [
        'letters' => ':attribute ត្រូវតែមានចំនួនតួអក្សរយ៉ាងតិចមួយ',
        'mixed' => ':attribute ត្រូវតែមានតួអក្សរធំមួយនិងតួអក្សរតូចមួយយ៉ាងតិច',
        'numbers' => ':attribute ត្រូវតែមានចំនួនលេខយ៉ាងតិចមួយ',
        'symbols' => ':attribute ត្រូវតែមាននូវនិមិត្តសញ្ញាមួយ',
        'uncompromised' => ':attribute ដែលបានផ្ដល់ជូនមាននៅក្នុងការរុករកទិន្នន័យ។ សូមជ្រើសរើស :attribute ផ្សេងទៀត',
    ],
    'present' => 'វាត្រូវតែមាន :attribute ដោយផ្ទាល់',
    'prohibited' => 'វាមិនអនុញ្ញាត :attribute',
    'prohibited_if' => 'វាមិនអនុញ្ញាត :attribute នៅពេល :other មានតម្លៃ :value',
    'prohibited_unless' => 'វាមិនអនុញ្ញាត :attribute លើស :other ត្រូវតែមាននៅក្នុង :values',
    'prohibits' => 'វាមិនអនុញ្ញាត :attribute ពីរទៀតដោយមាន :other ទៅលើ',
    'regex' => 'ទម្រង់នៃ :attribute មិនត្រឹមត្រូវ',
    'required' => ':attribute ត្រូវតែមាន',
    'required_array_keys' => 'វាត្រូវតែមានធាតុសម្រាប់: :values នៅក្នុង :attribute',
    'required_if' => ':other ត្រូវតែមាននៅពេល :attribute មានតម្លៃ :value',
    'required_if_accepted' => ':other ត្រូវតែមាននៅពេល :attribute ត្រូវបានទទួលយក',
    'required_unless' => ':other ត្រូវតែមានលើស :values ត្រូវតែមាននៅក្នុង :attribute',
    'required_with' => ':values ត្រូវតែមាននៅពេល :attribute ត្រូវតែមាន',
    'required_with_all' => ':values ត្រូវតែមាននៅពេល :attribute ត្រូវតែមានទាំងអស់',
    'required_without' => ':values ត្រូវតែមាននៅពេល :attribute មិនត្រូវតែមាន',
    'required_without_all' => ':values ត្រូវតែមាននៅពេល :attribute មិនត្រូវតែមានទាំងអស់',
    'same' => ':attribute ត្រូវតែដូចនឹង :other',
    'size' => [
        'array' => ':attribute ត្រូវតែមានចំនួនធាតុ :size',
        'file' => ':attribute ត្រូវតែមានទំហំ :size គីឡូបៃតង់',
        'numeric' => ':attribute ត្រូវតែមានទំហំ :size',
        'string' => ':attribute ត្រូវតែមានចំនួនតួអក្សរ :size',
    ],
    'starts_with' => ':attribute វាត្រូវចាប់ផ្តើមដោយមួយនៃទម្រង់ខាងក្រោយ: :values',
    'string' => ':attribute វាត្រូវតែជាតួអក្សរ',
    'timezone' => ':attribute វាត្រូវតែជាតួអានដេលត្រឹមត្រូវ',
    'unique' => ':attribute តម្លៃនេះត្រូវបានគេរក្សារួចហើយ',
    'uploaded' => 'មិនបានផ្ទុកឡើង :attribute ត្រូវបានបរាជ័យ',
    'uppercase' => ':attribute វាត្រូវតែជាអក្សរធម្មតា',
    'url' => ':attribute ត្រូវតែជាទិន្នន័យ URL ត្រឹមត្រូវ',
    'ulid' => ':attribute ត្រូវតែជាអក្សរធម្មតា ULID ត្រឹមត្រូវ',
    'uuid' => ':attribute ត្រូវតែជាទិន្នន័យ UUID ត្រឹមត្រូវ',

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
