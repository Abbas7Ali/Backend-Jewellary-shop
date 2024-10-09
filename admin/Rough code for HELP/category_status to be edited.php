<?php
	require 'config/dbc.php';

	$id =$_GET['id'];

	$query = mysql_query("SELECT * FROM smsexp123_category WHERE id=$id");

	$row = mysql_fetch_array($query);

    $newStatus = ($row ['status'] == 'Deactive' ) ? 'Active'  : 'Deactive' ;

		mysql_query("UPDATE smsexp123_category SET status='$newStatus' WHERE id=$id ");
		header('location:category.php');

	

	


?>