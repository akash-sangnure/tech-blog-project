<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass= "";
$dbname= "social_network";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	die("Failed to connect!");
	
}

