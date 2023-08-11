<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_shopee";// vô chỗ localhost myPHPadmin xong tạo cái database của m thay cái tên này (important)

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) {
	
	die("Failed to connect!");
}