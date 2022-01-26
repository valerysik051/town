<?php
session_start();

require_once 'get_table.php';

setTown();

header('Location: http://localhost/towns/index.php?level='.$_SESSION['check']);
