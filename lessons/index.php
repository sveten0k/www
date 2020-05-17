<?php
	include 'inc/headers.inc.php';
	include 'cookie.inc.php';
?>
<?php
define('PATH_LOG','path.log');
include 'inc/log.inc.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?= $title?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
			<span class="slogan">обо всём сразу</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?= $header?></h1>
		<blockquote>	<!-- Заголовок -->
<?php

if($visitCounter==1){
    echo "Спасибо,что зашли на огонек";
}else {
    echo "Вы зашли к нам $visitCounter раз
    <br>Последнее посещение: $lastVisit";
}
?>
        </blockquote>
			<!-- Область основного контента -->
			<?php
            $id = $_GET['id'];
				include 'inc/routing.inc.php';
			?>	
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<h2>Навигация по сайту</h2>
            <?php
           require_once ('inc/menu.inc.php');
           ?>
            <li><a href="index.php?id=log">Журнал посещений</a></li>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Супер-мега сайт, 2000 &ndash; <?= date('Y')?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>