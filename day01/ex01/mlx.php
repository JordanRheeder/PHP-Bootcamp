#!/usr/bin/php

<?php
    $iter = 0;
    $counter = 0;
    while ($counter < 10)
    {
        $iter = 0;
        while ($iter < 100)
        {
            echo "X";
            $iter++;
        }
        echo "\n";
        $counter++;
    }
?>