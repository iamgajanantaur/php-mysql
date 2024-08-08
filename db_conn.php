<?php

echo getenv("DATABASE_HOST");
echo getenv("MYSQL_USER");
echo getenv("MYSQL_PASSWORD");
echo getenv("MYSQL_DATABASE");



$sname= getenv("DATABASE_HOST");
$unmae= getenv("MYSQL_USER");
$password = getenv("MYSQL_PASSWORD");
$db_name = getenv("MYSQL_DATABASE");

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
