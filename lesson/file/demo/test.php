<?php
$link = mysqli_connect('localhost', 'root', 'kirill', 'lesson');
//Выбрать другую базу данных для работы
//mysqli_select_db($link, 'books');
if (!$link)
    echo "Ошибка: " . mysqli_connect_error();

//$res = mysqli_query($link, "SET NAMES 'utf-8'");
//if (!$res)
   // echo "Ошибка: " . mysqli_error($link);

$sql = "SELECT * FROM teachers";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);
var_dump($row);
mysqli_close($link);
