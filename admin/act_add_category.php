<?php
require 'config/dbc.php';

if(isset($_POST['submit']))
{
  
  $inputDate = DATE("y-m-d h:i:s A");
  $inputTitle = $_POST["inputTitle"];
  $inputCategory = $_POST["inputCategory"];
  $inputPrice = $_POST["inputPrice"];
  $inputDiscount = $_POST["inputDiscount"];
  // $userFile = $_POST["userFile"];
  $inputSlug = $_POST["inputSlug"];
  $status = $_POST["status"];
  $inputMetaDescriptions = $_POST["inputMetaDescriptions"];
  $inputMetaKeywords = $_POST["inputMetaKeywords"];

  //declaring variables
$filename = $_FILES['userFile']['name'];
$filetmpname = $_FILES['userFile']['tmp_name'];
//folder where images will be uploaded
$folder = '_assets/img/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);

$sql = "INSERT INTO add_brand(`create_date`, `name`, `price`, `discount`, `category`, `slug`, `status`, `description`, `keywords`, `file`)
VALUES ('$inputDate', '$inputTitle', '$inputPrice', '$inputDiscount', '$inputCategory', '$inputSlug', '$status', '$inputMetaDescriptions', '$inputMetaKeywords', '$filename')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:view_brand.php");
}
?>
