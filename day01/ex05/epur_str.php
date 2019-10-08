<?php
    if ($argc == 2)
    {
        $stripped = trim(preg_replace('/\s+/', ' ', $argv[1]));
        echo "$stripped\n";
    }
?>