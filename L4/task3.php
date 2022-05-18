<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ',
                    []
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function findThings( string $thingName, array $arr ) : bool
{
    foreach ($arr as $lookThings) {
        if (is_array($lookThings)) {
            return findThings( $thingName, $lookThings );
        } elseif ( $lookThings == $thingName ) {
            return true;
        }
    }
    return false;
}

$thing = 'Книга';// Привести первую букву в заглавную не получается, с кирилицей не работает.

var_dump(findThings( $thing, $box ));



