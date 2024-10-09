<?php
error_reporting(0);
include "data_insert/config/dbc.php";

$sql = 'SELECT * FROM smsexp123_category';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "EMP ID :{$row['id']}  <br> ".  
         "EMP NAME : {$row['create_date']} <br> ".  
         "EMP SALARY : {$row['title ']} <br> ".  
         "--------------------------------<br>";  
 } //end of while  
}else{  
echo "0 results";  
}    
?>  
