<?php
// Установка локали и выбор значений даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');

// Приветствие
$hour = (int)strftime('%H');
$welcome = '';
if (0 <= $hour && $hour < 6)
    $welcome = 'Доброй ночи';
elseif (6 <= $hour && $hour < 12)
    $welcome = 'Доброе утро';
elseif (12 <= $hour && $hour < 18)
    $welcome = 'Добрый день';
elseif (18 <= $hour && $hour < 23)
    $welcome = 'Добрый вечер';
else
    $welcome = 'Доброй ночи';


$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'index.php?id=about'],
    ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
    ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
    ['link' => 'Калькулятор', 'href' => 'index.php?id=calc']
];



