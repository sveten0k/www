<?php
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', 'kirill');
define('DB_NAME', 'eshop');
define('ORDERS_LOG', 'orders.log');

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

$basket = [];
$count = 0;

basketInit();