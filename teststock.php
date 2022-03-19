<?php
require_once "controller/controllerstock.php";
if(isset($_GET['action']))
$action=$_GET['action'];
else
$action='all';
controllerstock::$action();
?>