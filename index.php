<?php
$callback = function($value){
    if ($value % 2 === 0){
        return "$value четное число";
    };
    return "$value нечетное число";
};
    $arrayList = [4,5,1,4,7,8,15,6,71,45,2];
    $arrayFiltered = array_map( $callback, $arrayList);
    print_r($arrayFiltered);
?>

<?php
    $data = [1,2,3,4,5,6,7,8,9,10];
    $maxMinAvg = [];
    function calc(array &$arg1, array &$arg2) {
         $arg1["максимум"] =  max($arg2);
         $arg1["минимум"] = min($arg2);
         $arg1["среднее"] = array_sum($arg2)/count($arg2);
         return $arg1;
    }

    calc($maxMinAvg, $data);
    print_r($maxMinAvg);
    print_r("максимальное значение {$maxMinAvg['максимум']}; \n");
    print_r("минимальное значение {$maxMinAvg['минимум']}; \n");
    print_r("среднее значение {$maxMinAvg['среднее']}; \n");
?>

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
                    'Ключ'
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

function test_print(array $item, $thing){
    foreach ($item as $key => $value) {
        if (is_array($value)) {
            test_print($value, $thing);
        } else {
            if($value === $thing){
                $isInBox = true;
                return print_r($isInBox);
            }
        }

    }
}
test_print($box, "Книга");

?>