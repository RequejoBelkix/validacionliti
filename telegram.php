<?php

require_once("telegram/sendmessage.php");

$token = $_GET['token'];


    $msg = "Acceso Correcto";
    telegram($token, $msg);

?>



