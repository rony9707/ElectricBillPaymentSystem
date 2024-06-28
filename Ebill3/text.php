<?php
session_start();
require_once('config/config.php');

//if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

//header ("Location: login.php");}

echo $_SESSION['units'];
?>