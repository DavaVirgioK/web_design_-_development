<?php

    include 'koneksi.php';

    // filter data yang diinputkan
    $username = $_REQUEST['username'];
    // enkripsi password
    $password = $_REQUEST['password'];
    $encrypt = password_hash($password,PASSWORD_BCRYPT);
    $email = $_REQUEST['email'];


    // menyiapkan query
    // $rows = "SELECT username FROM user WHERE username = '$username'";
    // $sql = $conn->query($rows);
    // $checkusername = $sql->fetch_assoc();
    // echo count($checkusername);
    // if($checkusername == "1"){
    //   echo '<script>alert("username sudah digunakan")</script>';
    // }{
      $sql = "INSERT INTO user (username,email,password,role)
      VALUES ('$username' , '$email' , '$encrypt','Member')";
      if (mysqli_query($conn, $sql)) {
          header("Location: login.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
?>