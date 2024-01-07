<?php

    include 'loggedin.php';
    include 'koneksi.php';
    
    $id = $_REQUEST['id'];
    // menyiapkan query
    $sql = "DELETE FROM laporan WHERE id ='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: lihatLaporan.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>