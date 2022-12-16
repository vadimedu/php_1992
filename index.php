<?php
    do {
        $answer = readline("В каком году произшло крещение Руси? Варианты: 810, 988, 740 год. ");
        if ($answer === "988") {
            echo "Правильный ответ. Поздравляю!";
            break;
        }
        if ($answer === "810" || $answer === "740"){
            echo "Ошибка!";
            break;
        }
    } while(true);
?>

<?php
    do {
        $number = (int)readline("Введите количество задач, запланированных на сегодня? ");
    } while ($number <= 0);

    $output = "Сегодня у Вас запланировано: $number задач:\n";
    $summa = 0;

    for ($i = 1; $i <= $number; $i++) {
        $task =readline("какая задача запланирована сегодня? ");
        $period = (int)readline("Сколько требуется времени? ");
        $output .= " $task ({$period} ч). \n";
        $summa += $period;
    }

    echo $output;
    echo "Требуемое время: {$summa} ч.";
?>

<?php
    do {
        $num = (int)readline('Введите значение больше нуля:');
    } while ($num <= 0);
    $fingerNumber = $num % 8;
        if ($fingerNumber == 0) {
            $fingerNumber = 2;
        }
        if ($fingerNumber > 5) {
            $fingerNumber = 10 - $fingerNumber;
        }
        echo "Номер пальца: $fingerNumber";
?>
