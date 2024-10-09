<?php
	require 'config/dbc.php';

	$id = $_GET['id'];

$sql = "delete from customer where id=$id";  
  

if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully";  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
	header("Location:view_brand.php");

?>