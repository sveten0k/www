<?php
require "inc/lib.inc.php";
require "inc/config.inc.php";
require_once "admin/secure/secure.inc.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Личный кабинет</title>
	<meta charset="utf-8">
</head>

<body>
<h1>Личный кабинет</h1>
<?php
$login = '';
$password = '';
$result = '';

if ($_SERVER['REQUEST_METHOD']=='POST'){
	$login = $_POST['login'] ?: $login;
	if(!userExists($login)){
		$password = $_POST['password'] ?: $password;
		$has = gitHash($password);
		if(sveUser($login, $has))
			$result = 'Успешно зарегистрированы';
		else
			$result = 'При регистрации произошла ошибка';
	}else{
		$result = "Пользователь $login уже существует. Выберите другое имя.";
	}
}
?>
<h3><?= $result?></h3>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
	<div>
		<label for="txtUser">Логин</label>
		<input id="txtUser" type="text" name="login" value="<?= $login?>" style="width:40em"/>
	</div>
	<div>
		<label for="txtString">Пароль</label>
		<input id="txtString" type="text" name="password" value="<?= $password?>" style="width:40em"/>
	</div>
	<div>
        <input type="button" value="Зарегистрироваться!"
               onClick="location.href='catalog.php'"/>
	</div>
</form>
</body>
</html>