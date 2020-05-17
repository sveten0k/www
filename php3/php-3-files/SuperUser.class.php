<?php
class SuperUser extends User{
    public $role;

    function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role=$role;
    }
    function showInfo()
    {
        parent::showInfo();
        echo "Role: $this->role\n";
    }
}
$user=new SuperUser("Make Movy","Make","4444","Пользователь");
$user->showInfo();