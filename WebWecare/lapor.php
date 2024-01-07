<?php

    include 'loggedin.php';
    include 'koneksi.php';

    #id
    $username = $_SESSION['username'];
    $rowsid = "SELECT id FROM user WHERE username = '$username' ";
    $sqlid = $conn->query($rowsid);
    $id =  mysqli_fetch_array($sqlid);
    $id_username = $id[0];
    $rows = "SELECT * FROM laporan";
 
    $mysqliStatus = $conn->query($rows);
    
    $nama_depan = $_REQUEST['namadepan'];
    $nama_belakang = $_REQUEST['namabelakang'];
    $alamat = $_REQUEST['alamat'];
    $email = $_REQUEST['email'];
    $notelp = $_REQUEST['notelp'];
    $kejadian = $_REQUEST['kejadian'];
    $status = "unverif";
    
    echo $username;

    // menyiapkan query
    $sql = "INSERT INTO Laporan (id_username,namadepan,namabelakang,alamat,email,notelp,kejadian,status)
    VALUES ('$id_username','$nama_depan' , '$nama_belakang' , '$alamat','$email' , '$notelp'  , '$kejadian' ,'$status')";
    if (mysqli_query($conn, $sql)) {
        header("Location: lihatlaporan.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>