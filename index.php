<?php
require 'index.view.php';
function codebank($code){
    $numbers = str_split($code, 1);
    $control = $numbers[15];
//    unset($numbers[15]);
    $location = 1;
    $olgo = 1;
    $temp = 0;
    $total = 0;
    foreach ($numbers as $number) {
        if ($location % 2 ==0) {
            $olgo = 1;
        }
        if ($location % 2 != 0){
            $olgo = 2;
        }
        $temp = $number * $olgo;
        if ($temp > 9){
            $temp = $temp - 9;
        }
        $total += $temp;
        $location++;
    }
    if ($total % 10 == 0) {
        echo 'this code is true';
    }

}
if (! empty($_POST['code'])) {
    codebank($_POST['code']);
}
//test code card bank