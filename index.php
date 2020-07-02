<?php
session_start();
define('file', '/website/public');
define('link', '/website/');
require_once "./mvc/lienket.php";
$myApp = new App();
$session = new session();

?>