<?php
$link = mysqli_connect('localhost','root','','web');

/*mysqli_select_db($link,"test");*/

$res = mysqli_query($link,"SET NAMES'utf-8'");
if (!$res){
    echo mysqli_error($link);
}
mysqli_close($link);