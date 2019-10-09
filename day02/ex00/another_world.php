#!/usr/bin/php
<?php
    $i = 0;
    $space = -1;
    $len = strlen($argv[1]);
    if ($argc > 1)
    {
        while ($i <= $len)
        {
            if ($i == $len)
            {
                echo "\n";
                exit;
            }
            if ($argv[1][$i] != ' ' && $argv[1][$i] != '\t')
            {
                if ($space == 1)
                    echo " ";
                $space = 0;
                echo $argv[1][$i];
            }
            elseif ($space == 0)
                $space = 1;

            $i++;
        }
    }
?>
