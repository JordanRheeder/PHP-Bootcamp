#!/usr/bin/php
<?php
    $i = 0;
    $arr = [];
    while ($argv[++$i])
    {
        $stripped = trim(preg_replace('/\s+/', ' ', $argv[$i]));
        $split = explode(" ", $stripped);
        for ($j = 0; $split[$j]; $j++) {
            array_push($arr, $split[$j]);
        }
    }
    $temp = array_shift($arr);
    $len = count($arr);
    $arr[$len - 1] = $temp;
    for ($k = 0; $arr[$k]; $k++)
    {
        if ($k < $len - 1)
            echo "$arr[$k] ";
        else
            echo "$arr[$k]\n";
    }
?>
