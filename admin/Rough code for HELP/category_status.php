<?php
	require 'config/dbc.php';

	$id =$_GET['id'];

	$result = mysqli_query($conn, "SELECT * FROM smsexp123_category WHERE id=$id");

	$row = mysqli_fetch_array($result);

    $newStatus = ($row ['status'] == 'Deactive' ) ? 'Active'  : 'Deactive' ;

		mysqli_query($conn, "UPDATE smsexp123_category SET status='$newStatus' WHERE id=$id ");
		header('location:category.php');

	

	


?>