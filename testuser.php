<?php
require_once "controller/controlleruser.php";
if(isset($_GET['action']))
$action=$_GET['action'];
else
$action='all';
controlleruser::$action();
?>