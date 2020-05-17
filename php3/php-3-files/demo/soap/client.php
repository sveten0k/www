<?php
try {
  // Создание SOAP-клиента
  $client = new SoapClient("http://php3/php-3-files/demo/soap/stock.wsdl");
	
  // Посылка SOAP-запроса c получением результат
  $result = $client->getStock("c");

  echo "Текущий запас на складе: ", $result;
} catch (SoapFault $exception) {
  echo $exception->getMessage();
}