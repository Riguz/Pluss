<?php
require_once('conexion.php');

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM equipos';
	return $mysqli->query($sql);
}
?>