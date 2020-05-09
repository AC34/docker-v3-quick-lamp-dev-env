<?php
//You can access this file by localhost:80
echo "This is index.php";

//connecting to db 
$dsn = "mysql:host=mysql; charset=utf8; port=3306;";
$connection = new PDO($dsn,"root","password1");

