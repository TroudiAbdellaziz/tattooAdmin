<?php

session_start();

if(isset($_SESSION['logged']))
{
    $_SESSION['logged']=false;

    header('Location: http://localhost/admin_tatoo_shop/pages/login.php');
    
}

?>
