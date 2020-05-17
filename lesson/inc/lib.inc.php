<?php

function myError($errno, $errmsg, $errfile, $errline)
{
    $dt = date("d-m-Y H:i:s");
    $str = "[$dt] - $errmsg in $errfile: $errline\n";
    switch ($errno) {
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
    }
    error_log("$str", 3, "error.log");
}

function drawTable($cols = 10, $rows = 10, $color = "yellow")
{
    echo "<table border='1'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == 1 || $td == 1)
                echo "<th style='background: $color'>" . $tr * $td . "</th>";
            else
                echo "<td>" . $tr * $td . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


function drawMenu($menu, $vertical = true)
{
    if (!is_array($menu))
        return false;
    $style = "";
    if (!$vertical)
        $style = " style='display:inline; margin-right:15px'";
    foreach ($menu as $item) {
        echo "<li$style>";
        echo "<a href='{$item['href']}'>{$item['link']}</a>";
        echo "</li>";
    }
    return true;
}
