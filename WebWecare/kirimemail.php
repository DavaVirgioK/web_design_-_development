<?php
         $to = "testwecare26@gmail.com";
         $subject = "Pesan Dari WeCare";
         
         $message = "<b>Halo</b>";
         $message .= "<h1>Terima Kasih Sudah Menggunakan Wecare Ditunggu Balasan Dari ahli ya!!!</h1>";
         
         $header = "From:owenmic26@gmail.com \r\n";
         $header .= "Cc:testwecare26@gmail.com \r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>