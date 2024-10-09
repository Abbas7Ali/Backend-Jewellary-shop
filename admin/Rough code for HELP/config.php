<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smstemplate";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    $date = $_POST['date'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $status = 'DEACTIVE';
    $description = $_POST['description'];
    $keyword = $_POST['keyword'];

$query = mysql_query( "INSERT INTO `add_brandbase`(`date`, `title`, `slug`, `status`, `meta_description`, `meta_keyword`)
VALUES('date', 'title', 'slug', 'status', 'description', 'keyword')");

if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>  