<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "assignment 1";

$con = mysqli_connect('localhost', 'root', '', 'product');

if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

?>