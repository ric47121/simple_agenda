<?php
include "include/config.php"; //$gaSql['link']
@session_start();

$id = (isset($_REQUEST['id']))? $_REQUEST['id']:1;

	$query = "select * from amigos where amigo_id = ".$id;
	$result = mysqli_query($gaSql['link'], $query) or trigger_error(mysql_error());
	
	$row = mysqli_fetch_array($result);

	print_r($row);
?>