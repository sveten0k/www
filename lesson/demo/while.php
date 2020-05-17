<?php
$var = "HELLO";
$i = 0;
$len = strlen($var);
while ($i < $len) {
    echo $var{$i} . "<br>";
    $i++;
}