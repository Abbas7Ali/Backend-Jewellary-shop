<?php
	require 'config/dbc.php';

	$id =$_GET['id'];

	$result = mysqli_query($conn, "SELECT * FROM add_brand WHERE id=$id");

	$row = mysqli_fetch_array($result);

    $newStatus = ($row ['status'] == 'Instock' ) ? 'Available'  : 'Out of Sctock' ;

		mysqli_query($conn, "UPDATE add_brand SET status='$newStatus' WHERE id=$id ");
		header('location:category.php');

	

	


?>