<?php
$server='localhost';
$username='root';
$password='';
$db='airpeso';
$config=mysqli_connect($server,$username,$password,$db) or die('Connection Failed! Contact administrator.');
function CleanData($string){
    global $config;
   return mysqli_real_escape_string($config,$string);
}

error_reporting(0);

?>
