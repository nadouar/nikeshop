<?php 
require_once"Controller/Controllertest.php"; 
if(isset($_GET['action'])) 
	$action=$_GET['action']; 
else $action='liste';
Controllertest::$action(); ?>