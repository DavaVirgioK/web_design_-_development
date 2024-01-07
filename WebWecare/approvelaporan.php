<?php

    include 'loggedin.php';
    include 'koneksi.php';

    $id = $_REQUEST['id'];
    $rows = "SELECT * FROM laporan WHERE id ='$id' ";
    $sql = $conn->query($rows);
    $result = $sql->fetch_assoc();
    $status = $result['status'];

    // menyiapkan query
    if($status == "Progress"){
      $status = "Complete";
      $sql = "UPDATE Laporan SET status = '$status'  WHERE id ='$id'";
    }else{
      $status = "Progress";
      $sql = "UPDATE Laporan SET status = '$status'  WHERE id ='$id'";
    }
    if (mysqli_query($conn, $sql)) {
        header("Location: lihatlaporanadmin.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>