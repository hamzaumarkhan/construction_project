<?php
$server = 'localhost';
$username ='root';
$password ='';
$db='construction';
$conn =mysqli_connect($server,$username,$password,$db);
 if(!$conn) {
     echo 'error';
 }
?>