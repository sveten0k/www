<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?php
$f = fopen("data.txt", "r") or die("Не могу открыть файл!");

//fread($f,5);
//fread($f,3);
//fpassthru($f);

$lines = [];
while ( $line = fgets($f) ){
    $lines[] = $line;
}
print_r($lines);
// Закрытие потока
fclose($f);
?>
</BODY>
</HTML>