#!/usr/bin/php
<?php
    function error() {
        echo "Wrong Format\n";
        exit;
	}
date_default_timezone_set("Europe/Paris");
    $weekday_FR = array("Lundi"=>"Monday", "Mardi"=>"Tuesday", "Mercredi"=>"Wednesday", "Jeudi"=>"Thursday", "Vendredi"=>"Friday", "Samedi"=>"Saturdaay", "Dimanche"=>"Sunday");
    $month_FR = array("Janvier"=>"January", "Fevrier"=>"February", "Mars"=>"March", "Avril"=>"April", "Mai"=>"May", "Juin"=>"June", "Juillet"=>"July", "Aout"=>"August", "Septembre"=>"September", "Octobre"=>"October", "Novembre"=>"November", "Decembre"=>"December");
    $arr = explode(" ", $argv[1]);
    if (!(ctype_digit($arr[1]) && ctype_digit($arr[3]))) {
        error();
    }
    if (!(ctype_alpha($arr[0]) && (ctype_upper($arr[0][0])) && (ctype_alpha($arr[2])))) {
        error();
    }
    if ($arr[1] > 31) {
        error();
    }
    if (strlen($arr[1]) > 2 || strlen($arr[1]) < 1) {
        error();
    }
    if (!preg_match('/^(00|[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$/', $arr[4]))
        error();
    foreach ($weekday_FR as $key=>$day) {
        $counter = 0;
        if (!strcasecmp($key, $arr[0]))
            break;
        if ($counter == 6)
            error();
        $counter++;
    }
    $arr_EN = $arr;
    $arr_EN[0] = $weekday_FR[ucfirst($arr[0])];
    $arr_EN[2] = $month_FR[ucfirst($arr[2])];
    $arr_EN_Clean = $arr_EN;
    $arr_EN = implode(" ", $arr_EN);
    array_shift($arr_EN_Clean);
    $arr_EN_Clean = implode(" ", $arr_EN_Clean);
    $time = strtotime($arr_EN);
    $time_clean = strtotime($arr_EN_Clean);
    if (strcmp(strtotime($arr_EN), strtotime($arr_EN_Clean))) {
        error();
    }
    echo ("$time\n");
    ?>
