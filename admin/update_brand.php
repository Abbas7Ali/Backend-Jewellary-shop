<?php
require 'config/dbc.php';
$id = $_POST['id'];

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

$sql = "UPDATE add_brand SET `create_date` = '$inputDate', `name` = '$inputTitle', `category`='$inputCategory', `price` ='$inputPrice', `discount` = '$inputDiscount',  `slug`='$inputSlug', `status`='$status', `description`='$inputMetaDescriptions', `keywords`='$inputMetaKeywords', `file` = '$filename' WHERE `id`='$id' ";
mysqli_query($conn, $sql);

header("Location:view_brand.php");
}?>


