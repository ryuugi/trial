<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ajax";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
	die("Connection Error");
}