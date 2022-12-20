<?php
$array1 = [1,2,3,4,5,6,7,8,9,10];
$array2 = [2,2,2,2,2,2,2,2,2,2];
$arrayLength = count($array1);
for ($i=0; $i < $arrayLength; $i++) {
    print_r ($array1[$i] * $array2[$i] . "\n");
}

?>

<?php
    $name = readline("Введите Ваше имя: ");
    echo "Поздравляю с днем рождения $name!"
?>

<?php
    $greetings = ["счастья", "здоровья", "добра"];
    $epitets = ["бескрайнего", "лучистого", "Светлого"];
    $rand_keys_greet = array_rand($greetings, 3);
    $rand_key_epitets = array_rand($epitets, 3);
    echo "Дорогие Петров и Васечкин, поздрввляю Вас с днем пионерии желаю " . $epitets[$rand_key_epitets[0]] . " " . $greetings[$rand_keys_greet[0]]
?>

<?php
    $students =[
        "ит20" => [
            "Иванов" => 5,
            "Петров" => 3,
            "Сидоров" => 2
        ],
        "ит30" => [
            "Лукьянов" => 5,
            "Светлов" => 4,
            "Бардов" => 2
        ]

        ];

            $average20 = array_sum($students["ит20"]) / count($students["ит20"]);
            $average30 = array_sum($students["ит30"]) / count($students["ит30"]);
            echo "среднее по группе ИТ20: " . $average20;
            echo "среднее по группе ИТ30: " . $average30;
            echo " Самая высокая оценка по группам: " . max( $average20,  $average30);

?>