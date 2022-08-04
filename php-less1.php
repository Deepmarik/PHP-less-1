<?php
//Lesson 1
//Задание 2

$name = readline("Привет, как тебя зовут?\n");
$age = readline("Сколько тебе лет,$name\n ");
echo "Тебя зовут, $name и тебе $age лет\n";

//Задание 3
$name1 = readline("Привет, как тебя зовут?\n");
$objective = readline("Что сегодня нужно сделать?\n");
$time = (int)readline("Сколько времени это займет?\n");
$objective1 = readline("А что еще сегодня нужно сделать?\n");
$time1 = (int)readline("Сколько времени это займет?\n");
$objective2 = readline("И последнее что сегодня нужно сделать?\n");
$time2 = (int)readline("Сколько времени это займет?\n");
$sum=$time+ $time1+$time2;
echo "$name1, у тебя сегодня три задачи, а именно:\n  - $objective ({$time}ч)\n - $objective1 ({$time}ч)\n - $objective2 ({$time}ч)\n ";
echo "$name1, это займет у тебя $sum ч\n ";
error_reporting(E_ALL);
ini_set('display_errors', 'on');

//задание простое