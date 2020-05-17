<?php
function __autoload($name){
    require "$name.class.php";
}
$obj1= new SuperUser();
$obj2= new User();