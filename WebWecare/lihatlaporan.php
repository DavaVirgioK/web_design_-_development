<?php

  include 'loggedin.php';
  include 'koneksi.php';

  $username = $_SESSION['username'];
  $rowsid = "SELECT id FROM user WHERE username = '$username' ";
  $sqlid = $conn->query($rowsid);
  $id =  mysqli_fetch_array($sqlid);
  $data = $id[0];

  $rows = "SELECT * FROM laporan WHERE id_username = '$data' ";
  $sql = $conn->query($rows);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<span class="d-block p-1 bg-dark ">
    <ul class="nav justify-content-between p-4 " >
       <li class="nav-brand pl-5">
        <img src="logo.png" href="index.html">
      </li>
    <div class="nav pt-3">
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="indexlogin.php">Home</a></b> 
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="pageLapor.php">Buat Laporan</a></b> 
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="lihatlaporan.php">Lihat Laporan</a></b> 
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="ahli.html">Chat Dengan Ahli</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="artikel.php">Artikel</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="about.html">About Us</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="loggedout.php">Log Out</a></b>
      </li>
     </div>
    </ul>
  
  </span>
 

  <!-- banner -->
  <div class="container">
    <h2>Lihat Laporan</h2>         
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Id Laporan</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php while($result = $sql->fetch_assoc())
        {
          $i = 1;
          $id = $result['id'];
      ?>
          <tr>
            <th><?= $i ?></th>
            <th><?= $id ?></th>
            <th><?= $result['status'] ?></th>
            <th>
              <a href="editlaporan.php?id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
              <a href="delete.php?id=<?php echo $id; ?>"class="btn btn-danger">Delete</a>
            </th>
          </tr>
        <?php
          $i = $i +1;  }
        ?>
      </tbody>
    </table>
  </div>


  <footer class="page-footer container2 text-white">


    <div class="footer-copyright text-center py-3">Copyright © 2022 weCare</div>
   

  </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>