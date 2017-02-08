<?php 

	$username 	= 'root';
	$server 	= 'localhost';
	$pass		= '';
	$db			= 'jun';

	$conn = mysql_connect($server,$username,$pass);
	$conn_db = mysql_select_db($db);
 ?>