<?php

interface ISuperUser{
    function getInfo();
}

abstract class UserAbstract{
    public $name;
    public $login;
    public $password;

    function __construct($name,$login,$password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    abstract function showInfo();
}
class User extends UserAbstract
{


    function showInfo()
    {
        echo "<hr>Name:{$this->name}<br>";
        echo "Login:{$this->login}<br>";
        echo "Password:{$this->password}<br>";
    }

    function __destruct()
    {
        echo "<hr>Пользователь {$this->login} удален<br>";
    }
}
class SuperUser extends User{

    public $role;

    function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;

    }
    function showInfo()
    {
        parent::showInfo();
        echo "Role:{$this->role}<br>";
    }
}


$user1 = new User("John",'root1','1111');
$user2 = new User("Make",'root2','2222');
$user3 = new User("Vasya",'root3','3333');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser("Petya",'root4','4444','admin');
$user->showInfo();


