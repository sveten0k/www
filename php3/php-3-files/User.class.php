<?php
class User extends UserAbstract{}
$user1 = new User("Vasilii Pupkin", "Vasya", "1111");
$user2 = new User("Petr Ivanov", "Petya", "2222");
$user3 = new User("Ivan Petrov", "Vanya", "3333");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();