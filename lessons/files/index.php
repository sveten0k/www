<?php
require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";
//установка локали и даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%m');
$year = strftime('%Y');

?>
<!DOCTYPE html>
<html>

<head>
    <title>Сайт нашей школы</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>

<div id="header">
<?php
require_once "inc/top.inc.php";
?>
</div>
<?php
//echo date("H:i",time(date_default_timezone_set("Asia/Barnaul")));
echo date("H:i");
?>

<div id="content">
    <!-- Заголовок -->
    <h1>Добро пожаловать на наш сайт!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <blockquote>
        <?php echo strftime('Сегодня %d-%m-%Y'); ?>
    </blockquote>
<?php
require_once "inc/index.inc.php";
?>
    <!-- Область основного контента -->
</div>
<div id="nav">
    <!-- Навигация -->
<?php
require_once "inc/menu.inc.php";
?>
    <!-- Навигация -->
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
<?php
require_once "inc/bottom.inc.php";
?>
    <!-- Нижняя часть страницы -->
</div>
</body>
</html>