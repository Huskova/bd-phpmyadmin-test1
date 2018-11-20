<?php

$connection = mysql_connect("localhost", "root", "vera1994");
$db = mysql_select_db("my_bd");
mysql_set_charset("utf-8");

if(!$connection || !$db)
{
	exit(mysql_error());
}

?>