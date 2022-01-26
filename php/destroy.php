<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/towns/index.php?level=light');