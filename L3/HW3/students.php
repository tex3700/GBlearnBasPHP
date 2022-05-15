<?php

$studentsList = [
    'БАП1320' => [
        'Смирнова Христина Потаповна' => 5,
        'Рогозин Даниил Арсениевич' => 3,
        'Золин Владилен Леонтиевич' => 4,
        'Архаткина Владислава Никитевна' => 4,
        'Мещерякова Мария Елизаровна' => 2,
        'Саврасова Фаина Ивановна' => 5,
        'Хромченко Зинаида Николаевна' => 1,
        'Протасова Майя Леонидовна' => 4,
    ],
    'ИТ1720' => [
        'Ябров Тимур Чеславович' => 2,
        'Белорусов Ефрем Изяславович' => 3,
        'Ягода Назар Прохорович' => 4,
        'Ярилова Розалия Серафимовна' => 5,
        'Нырко Платон Вадимович' => 1,
        'Калинин Агап Моисеевич' => 4,
        'Никифоров Юлиан Прокофиевич' => 3
    ]
];

foreach ( $studentsList as $group => $groups ) {
    $averageGrade[$group] = array_sum($groups)/count($groups);

        foreach ( $groups as $studentName => $gread ) {

            if ($gread < 3) {
                $exclude[$group][] = $studentName;
            }
        }
}

arsort($averageGrade);
$topGroup = array_key_first($averageGrade);

echo "Наивысший средний бал у группы:\n $topGroup = $averageGrade[$topGroup] ;".PHP_EOL;
echo "Список студентов на отчисление:".PHP_EOL;
print_r($exclude);
