<?php
session_start();
$output = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["randStr"])) {
        $output = "Включи картинки";
    } else {
        if ($_SESSION["randStr"] == strtolower($_POST["answer"]))
            $output = "YES";
        else
            $output = "NO";
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Регистрация</title>
</head>

<body>
<h1>Регистрация</h1>
<form action="" method="post">
    <div>
        <img src="CAPTCHA.php">
    </div>
    <div>
        <label>Введите строку</label>
        <input type="text" name="answer" size="6">
    </div>
    <input type="submit" value="Подтвердить">
</form>
<?php
echo $output;
?>
</body>

</html>