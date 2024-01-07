<?php

    include 'loggedin.php';
    include 'koneksi.php';

    $username = $_SESSION['username'];
    $rows = "SELECT * FROM laporan";
 
    $mysqliStatus = $conn->query($rows);
    
    $id = $_REQUEST['id'];
    $nama_depan = $_REQUEST['namadepan'];
    $nama_belakang = $_REQUEST['namabelakang'];
    $alamat = $_REQUEST['alamat'];
    $email = $_REQUEST['email'];
    $notelp = $_REQUEST['notelp'];
    $kejadian = $_REQUEST['kejadian'];
    $status = "Pending";
    
    echo $username;

    // menyiapkan query
    $sql = "UPDATE Laporan SET namadepan='$nama_depan',namabelakang='$nama_belakang',alamat='$alamat'
    ,email='$email',notelp='$notelp',kejadian='$kejadian' WHERE id ='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: lihatlaporan.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>