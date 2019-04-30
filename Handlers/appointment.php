<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=shop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
  // form handler
  if($_POST && isset($_POST['date'], $_POST['name'], $_POST['email'], $_POST['phone'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date =  date( 'Y-m-d', strtotime($_POST['date']));
    $hour= $_POST['hour'];
    $min = $_POST['min'];
    $amap = $_POST['amap'];
    $time=$hour.':'.$min.' '.$amap;


    $sql = "INSERT INTO appointment (name,email,phone,date,time)
    VALUES ('$name', '$email', '$phone','$date','$time')";

    $conn->exec($sql);
    header("Location: http://localhost/admin_tatoo_shop/");
  }
?>