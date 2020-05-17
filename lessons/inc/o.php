<?php
function drawMenu($menu, $vertical = true)
{
    $style="";
    if(!$vertical)
        $style=" style='display:inline;margin-right:15px'";
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li$style>";
        echo "<a href='{$item['href']}'>{$item['link']}</a>";
        echo "</li>";
    }
    echo "</ul>";
}
function drawTable($cols = 20, $rows = 20, $color = "aqua")
{
    echo "<table border='2'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == 1 or $td == 1)
                echo "<th style='background: $color'>" . $tr * $td . "</th>";
            else
                echo "<td>" . $tr * $td . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
