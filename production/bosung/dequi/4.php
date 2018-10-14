<?php
/**
 * Created by PhpStorm.
 * User: ak47
 * Date: 10/14/2018
 * Time: 2:23 PM
 */


$a = 2;
function thamchieu (&$param){
    $param = $param * 5;
    echo '<br> biến cục bộ trong hàm $param :'. $param;

}

thamchieu($a);
echo '<br> In biến $a ngoài hàm :'. $a;