<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$connect = mysql_connect("127.0.0.1","root","") or die("Não foi possível ligar ao servidor...");
	$db = mysql_select_db("uhi", $connect) or die("Impossível entrar na Base de dados");
?>
<html>
<header>
	<meta charset="utf-8">
	<title>uHi - de universitário para universitário</title>

</header>
</html>