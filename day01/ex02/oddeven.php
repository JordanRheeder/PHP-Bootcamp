#!/usr/bin/php

<?php
    function oddEven() {
        while(1) {
        echo "Enter a number: ";
        $input = rtrim(fgets(STDIN));
        if (!(is_numeric($input)))
        {
            echo "'$input' is not a number\n";
            oddEven();
        }
        if ($input % 2 == 0)
            echo "The number $input is even\n";
        if ($input % 2 == 1)
            echo "The number $input is odd\n";
        }
    }
    oddEven();
?>