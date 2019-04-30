<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$user=array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM admin where email='$email' and password='$password'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query)>0)
{
    $_SESSION['logged']=true;
    $_SESSION['email']=$email;
    header("Location: http://localhost/admin_tatoo_shop/");
}
else
{
    $_SESSION['logged']=false;
    header("Location: http://localhost/admin_tatoo_shop/pages/login.php");
}



