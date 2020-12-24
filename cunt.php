<?php
$_SESSION['vistor'] = 0;
session_start();

$_SESSION['vistor'] = $_SESSION['vistor']+1;
echo "vistors number: " . $_SESSION['vistor'];
?>