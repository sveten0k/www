<?php
	//setcookie("userName", 'John');
$user=[
    'name'=>'Jhon',
    'login'=>'root',
    'password'=>'1234'
];
$str=serialize($user);
echo base64_encode($str);
?>