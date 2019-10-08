<?php
    $i = 0;
    while ($argv[++$i])
    {
        $stripped = trim(preg_replace('/\s+/', ' ', $argv[$i]));
        $split = explode(" ", $stripped);
        foreach($split as $var)
            $arr[] = $var;
    }
    sort($arr);
    foreach($arr as $car)
        echo "$car\n";
?>
