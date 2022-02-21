<?php
	$host = 'localhost';
	$dbname = 'escrime';
	$username = 'root';
	$password = '';
    
	$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8"; 
	$link = mysqli_connect($host, $username, $password, $dbname);
?>