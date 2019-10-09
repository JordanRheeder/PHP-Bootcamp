#!/usr/bin/php
<?php
function ft_split($input) {
    $ret = explode(" ", $input);
    sort($ret);
    return (array_filter($ret));
}
?>