<?php

if (!isset($_SESSION['check'])&&!isset($_GET['level'])){
    $_SESSION['check']='light';
    header('Location: http://localhost/towns/index.php?level=light');
} else {
  $_SESSION['check'] = $_GET['level'];
}