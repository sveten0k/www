<?php
/* Основные настройки */
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = 'kirill';
const DB_NAME = 'gbook';
/* Основные настройки */

/* Сохранение записи в БД */
$msg = "INSERT INTO msgs (name, email, msg) 
          VALUES ('$name', '$email', '$msg')";
/* Сохранение записи в БД */

/* Удаление записи из БД */

/* Удаление записи из БД */
?>
    <h3>Оставьте запись в нашей Гостевой книге</h3>

    <form method="post" action="<?= $_SERVER['REQUEST_URI'] ?>">
        Имя: <br/><input type="text" name="name"/><br/>
        Email: <br/><input type="text" name="email"/><br/>
        Сообщение: <br/><textarea name="msg"></textarea><br/>

        <br/>

        <input type="submit" value="Отправить!"/>

    </form>
<?php
/* Вывод записей из БД */

/* Вывод записей из БД */
?>