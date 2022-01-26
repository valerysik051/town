<?php

require_once 'searchInfo.php';
function getTable($table) {

    foreach ($_SESSION[$table] as $value){
        echo $value;
    }
}

function crateTb(){
    $link=searchInfo::_getLink($_SESSION['town']);
    $_SESSION['table'][$_SESSION['town']]="<tr class='lineTb'><td class='cellTb'><a href='$link' target='_blank' class='linkTb'>".$_SESSION['town']."</a></td>"."<td class='cellTb'><a href='$link'  class='linkTb'  target='_blank'>".$_SESSION['town']."</a></td></tr>";
}

function checkLaters(){
    $firstLater = '';
    $lastLater = '';
    $str = $_SESSION['town'];
    $strFirst = $_POST['town'];
    if (isset($_POST['town'])&&$_POST['town']!='') {


        $lastLater = mb_substr($str, mb_strlen($str) - 1, 1);
        $firstLater = mb_substr($strFirst, 0, 1);

        if ($lastLater=='ъ'||$lastLater=='ь'||$lastLater=='ы'){
            $lastLater = mb_substr($str, mb_strlen($str) - 2, 1);
        } else {
            $i=1;
        }

    }
    $arr[0]=mb_strtolower($lastLater);
    $arr[1]=mb_strtolower($firstLater);
   // $_SESSION['first'] = $arr[0];
    //$_SESSION['second']=$arr[1];
    return $arr;

}

function setTown(){
    $arr = checkLaters();
    if (isset($_POST['town'])&&$_POST['town']!=''&& searchInfo::_getLink($_POST["town"])!='No result'&&$arr[0]==$arr[1]) {
        $_SESSION['last']=$_SESSION['town'];
        $_SESSION['town'] = $_POST['town'];
        $_SESSION['answers'][$_SESSION['town']] = 1;
    }
}