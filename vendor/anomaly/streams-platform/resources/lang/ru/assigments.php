<?php

return [
    'field'        => [
        'name'         => 'Поле',
        'label'        => 'Поле',
        'instructions' => 'Выберите поле для связывания.'
    ],
    'label'        => [
        'name'         => 'Лейбл',
        'instructions' => 'Лейблы будут видны в формах. Оставьте пустым чтобы использовать имя поля.'
    ],
    'required'     => [
        'name'         => 'Обязательно',
        'label'        => 'Обязательно ли это поле?',
        'instructions' => 'Если обязательно, то поле ВСЕГДА ДОЛЖНО иметь значение.'
    ],
    'unique'       => [
        'name'         => 'Уникальное',
        'label'        => 'Уникально ли это поле?',
        'instructions' => 'Если уникально, то поле ДОЛЖНО иметь УНИКАЛЬНОЕ значение.'
    ],
    'placeholder'  => [
        'name'         => 'Плейсхолдер',
        'instructions' => 'Если поддерживается, будет виден внутри пустых полей.'
    ],
    'translatable' => [
        'name'         => 'Переводимое',
        'label'        => 'Переводимо ли поле?',
        'instructions' => 'Если переводимо, будет доступно по 1 значению для каждого включенного языка.',
        'warning'      => 'Поле типа "Associated" не поддерживает переводы.'
    ],
    'instructions' => [
        'name'         => 'Инструкции',
        'instructions' => 'Инструкции будут показаны рядом с полем для помощи пользователям.'
    ],
    'warning'      => [
        'name'         => 'Предупреждения',
        'instructions' => 'Предупреждения помогают привлечь внимание к важной информации.'
    ]
];
