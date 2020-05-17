<?php
$t=$news->clearStr($_POST["title"]);
$d=$news->clearStr($_POST["description"]);
$s=$news->clearStr($_POST["source"]);
$c=$news->clearInt($_POST["category"]);
if (empty($t) or empty($d)){
    $errMsg="Заполните все поля формы!";
}else{
    if (!$news->saveNews($t,$c,$d,$s)){
        $errMsg="Ошибка при добавлении новости";
    }else{
        header("Location: news.php");
        exit;
    }
}