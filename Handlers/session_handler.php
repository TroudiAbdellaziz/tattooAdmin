<?php

session_start();

$logged = false;
if(isset($_SESSION['logged']))
{
    if($_SESSION['logged']==true)
    {
        $logged = true;
        $email=$_SESSION['email'];
    }
}
if(isset($_SESSION['flash'])){
    $flash=$_SESSION['flash'];
    $_SESSION['flash']='nothing';
}else{
    $_SESSION['flash']='nothing';
    $flash='nothing';}
    if(isset($_SESSION['changePassword'])){
        $changePassword=$_SESSION['changePassword'];
        $_SESSION['changePassword']='nothing';}else{
            $changePassword='nothing';
        }
?>
