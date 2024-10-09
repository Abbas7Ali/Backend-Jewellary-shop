	<?php
	require 'config/dbc.php';

	$date =$_POST['inputDate'];
	$title =$_POST['inputTitle'];	
	$slug = $_POST['inputSlug'];
	$meta_description = $_POST['inputMetaDescriptions'];
	$meta_keyword =$_POST['inputMetaKeywords'];

	$id =$_POST['id'];

	mysqli_query($conn, "UPDATE smsexp123_category SET create_date='$date', title='$title', slug ='$slug', meta_description='$meta_description', meta_keywords='$meta_keyword' WHERE id=$id");

	header('location:category.php');
?>