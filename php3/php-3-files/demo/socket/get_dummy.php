<?php
header("Content-Type: text/html;charset=utf-8");
// Сокетное соединение
	// Создаем сокет (host+порт)
	$socket = fsockopen("php3", 80, $sock_errno, $sock_errmsg, 30);
	if (!$socket)
	    echo $sock_errmsg;
	// Создаем POST-строку
	$str_query = "name=John&age=25";
	
	// Посылка HTTP-запроса
	$out = "POST /php-3-files/demo/socket/dummy.php HTTP/1.1\r\n";
	$out .= "Host: php3\r\n";
	$out .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$out .= "Content-length: " . strlen($str_query). "\r\n\r\n";
	
	$out .= $str_query;
	fwrite($socket, $out);

	// Получаем и выводим ответ
	while (!feof($socket)) {
		echo fgets($socket);
	}

	// Закрытие соединения
	fclose($socket);