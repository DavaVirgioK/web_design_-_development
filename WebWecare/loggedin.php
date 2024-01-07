<?php
  session_start();

  if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "online")) {
    header("Location: login.php");
    exit;
    }
?>
