<?php

return [
    'accepted'         => 'Вы должны принять :attribute.',
    'active_url'       => 'Поле :attribute недействительный URL.',
    'after'            => 'Поле :attribute должно быть датой после :date.',
    'alpha'            => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'       => 'Поле :attribute может содержать только буквы, цифры и дефис.',
    'alpha_num'        => 'Поле :attribute может содержать только буквы и цифры.',
    'array'            => 'Поле :attribute должно быть массивом.',
    'before'           => 'Поле :attribute должно быть датой перед :date.',
    'between'          => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Размер :attribute должен быть от :min до :max Килобайт.',
        'string'  => 'Длина :attribute должна быть от :min до :max символов.',
        'array'   => 'Поле :attribute должно содержать :min - :max элементов.'
    ],
    'confirmed'        => 'Поле :attribute не совпадает с подтверждением.',
    'date'             => 'Поле :attribute не является датой.',
    'date_format'      => 'Поле :attribute не соответствует формату :format.',
    'different'        => 'Поля :attribute и :other должны различаться.',
    'digits'           => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between'   => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'email'            => 'Поле :attribute имеет ошибочный формат.',
    'exists'           => 'Выбранное значение для :attribute не существует.',
    'image'            => 'Поле :attribute должно быть изображением.',
    'in'               => 'Выбранное значение для :attribute ошибочно.',
    'integer'          => 'Поле :attribute должно быть целым числом.',
    'ip'               => 'Поле :attribute должно быть действительным IP-адресом.',
    'max'              => [
        'numeric' => 'Поле :attribute должно быть не больше :max.',
        'file'    => 'Поле :attribute должно быть не больше :max Килобайт.',
        'string'  => 'Поле :attribute должно быть не длиннее :max символов.',
        'array'   => 'Поле :attribute должно содержать не более :max элементов.'
    ],
    'mimes'            => 'Поле :attribute должно быть файлом одного из типов: :values.',
    'extensions'       => 'Поле :attribute должно иметь одно из расширений: :values.',
    'min'              => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file'    => 'Поле :attribute должно быть не менее :min Килобайт.',
        'string'  => 'Поле :attribute должно быть не короче :min символов.',
        'array'   => 'Поле :attribute должно содержать не менее :min элементов.'
    ],
    'not_in'           => 'Выбранное значение для :attribute ошибочно.',
    'numeric'          => 'Поле :attribute должно быть числом.',
    'regex'            => 'Поле :attribute имеет ошибочный формат.',
    'required'         => 'Поле :attribute обязательно для заполнения.',
    'required_if'      => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_with'    => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without' => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'same'             => 'Значение :attribute должно совпадать с :other.',
    'size'             => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file'    => 'Поле :attribute должно быть :size Килобайт.',
        'string'  => 'Поле :attribute должно быть длиной :size символов.',
        'array'   => 'Количество элементов в поле :attribute должно быть :size.'
    ],
    'unique'           => 'Такое значение поля :attribute уже существует.',
    'url'              => 'Поле :attribute имеет ошибочный формат.',

    'custom' => [],

    'attributes' => [],
];