<?php
    $name = readline("Введите Ваше имя! \n");
    $age = readline("Введите Ваш возраст! \n");
    $str = "Вас зовут $name, вам $age лет";
    echo $str;
?>

<?php
$my_task = array();
$time_required = array();
    for ($i=0; $i < 3; $i++) {
        $my_task[] = readline("Какая задача стоит перед вами сегодня? \n");
        $time_required[] = readline("Сколько примерно времени эта задача займет? \n");
    }

    echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:  \n";
    for ($i=0; $i < count($my_task); $i++) {
        echo $my_task[$i] . " (" . $time_required[$i] . ")\n";
    }
    echo "Примерное время выполнения плана = " . array_sum($time_required) . "ч";
?>
