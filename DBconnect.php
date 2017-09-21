<?php
$host = getenv("MYSQL_HOST");
$port = getenv("MYSQL_PORT");
$user = getenv("MYSQL_USER");
$pass = getenv("MYSQL_PASS");
$db = getenv("MYSQL_DB");

	$conn = new PDO("mysql:host=".$host.":" . $port . ";dbname=" . $db . ";Pooling=True;MinimumPoolSize=10;maximumpoolsize=50;Connection Timeout=30;", $user, $pass);
	if(!$conn){
		echo "failed to connect!!";
	}
?>