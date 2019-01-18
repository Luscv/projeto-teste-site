<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "127.0.0.1";
    $user = "root";
    $password = "";
    $db = "uhi";

    $mysqli = new mysqli($host, $user, $password, $db);

    if($mysqli->connect_errno)
        echo "falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>
<html>
<header>
	<meta charset="utf-8">
	<title>uHi - de universitário para universitário</title>

</header>
</html>