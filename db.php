<?php

//Your Mysql Config
$servername = "localhost";
$username = "id21284538_job1";
$password = "Gayathri@9964";
$dbname = "id21284538_jbpl1";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}