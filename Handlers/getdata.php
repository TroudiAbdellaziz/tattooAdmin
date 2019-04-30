<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$table_data=array('name','email','phone','date','time');
$notification_data=array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM appointment";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, "Select name from appointment");
    while($result = $query->fetch_assoc()){
        $notification_data[] = $result['name'];
        $table_data['id'][]=$result['id'];
        $table_data['name'][]= $result['name'];
        $table_data['email'][]=$result['email'];
        $table_data['phone'][]=$result['phone'];
        $table_data['date'][]=$result['date'];
        $table_data['time'][]=$result['time'];   
    }
    $notification_data=array_reverse($notification_data,false);
?>
