<?php

function my_count($var, $mode = 0)
{
    if (is_null($var))
        return 0;
    if (!is_array($var))
        return 1;
    $cnt = 0;
    foreach ($var as $v) {
        if(is_array($v) && $mode)
           $cnt+= my_count($v,1);
        $cnt++;
    }
    return $cnt;
}



