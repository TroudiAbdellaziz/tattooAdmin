<?php
         session_start();
         $to = $_POST['email'];
         $subject = "Appointment confirmation";
         
         $message = "<b>".$_POST['message'].".</b>";
         
         $header = "From:khomsatattoo@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            $_SESSION['flash']="Message sent successfully...";
            header('Location: http://localhost/admin_tatoo_shop/');
         }else {
            $_SESSION['flash']= "Message could not be sent...";
            header('Location: http://localhost/admin_tatoo_shop/');
         }
      ?>