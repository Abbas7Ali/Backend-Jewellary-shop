<?php
	require 'config/dbc.php';

	$id = $_GET['id'];

	//$id=2;  
$sql = "delete from smsexp123_category where id=$id";  

if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully";  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
	header("Location:category.php");

?>