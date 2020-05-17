<?php
abstract class UserAbstract{
    public $name;
    public $login;
    public $password;

    function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    function __destruct()
    {
        echo "<hr>Пользователь $this->login удален\n";
        // TODO: Implement __destruct() method.
    }

    function showInfo()
    {
        echo "<hr>Имя пользователя: $this->name\n";
        echo "Логин: $this->login\n";
        echo "Пароль: $this->password\n";
    }
}