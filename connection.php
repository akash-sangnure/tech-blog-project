<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass= "";
$dbname= "education_website";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	die("Failed to connect!");
	
}

