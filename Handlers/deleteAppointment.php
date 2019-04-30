<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$notification_data=array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET['id'];
$query2 = mysqli_query($conn, "DELETE from appointment WHERE id='$id'");
return $query2;
?>
