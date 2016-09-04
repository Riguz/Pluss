<?php
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'pluss');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexion';
	exit;
}

?>