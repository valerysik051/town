<?php
require_once('searchInfo.php');

function getInfo(){
    if (isset($_SESSION['town']))
    {
        $res= searchInfo::result($_SESSION['town']);
        $str = explode('.', $res);
        echo '<p class = "info-town">'.$str[0].'</p>';
    } else {
        $str = 'Тут будет результат';
        echo '<p class = "info-town">'.$str.'</p>';
    }
}