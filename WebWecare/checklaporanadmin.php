<?php

  include 'loggedin.php';
  include 'koneksi.php';

  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $sql = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  if($row['role'] == 'Member'){
      header("location: indexlogin.php");
  }

  $id =  $_GET['id'];
  $rows = "SELECT * FROM laporan WHERE id = '$id' ";
  $sql = $conn->query($rows);
  $data = $sql->fetch_assoc();
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
      <li>
        <b><a class="nav-link text-white active h5" href="lihatlaporanadmin.php">Lihat Laporan</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-white active h5" href="loggedout.php">Log Out</a></b>
      </li>
     </div>
    </ul>
  </span>
 

  <!-- banner -->
    <div class="container-fluid banner my-5 ">
      <div class="container text-center">
        <h3 class="display-4 font-weight-bold">Check Form Laporan Kekerasan Seksual<hr></h4>
      </div>
    </div>
    <form class="container py-3 pb-5" method="post" action="lihatlaporanadmin.php">
    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']?>" required>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Nama depan</label>
          <input type="text" class="form-control" name="namadepan" value="<?php echo $data['namadepan']?>">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Belakang</label>
          <input type="text" class="form-control" name="namabelakang" value="<?php echo $data['namabelakang']?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']?>">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">E-Mail</label>
          <input type="email" class="form-control" name="email" value="<?php echo $data['email']?>">
        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">No Telephone</label>
          <input type="text" class="form-control" name="notelp" value="<?php echo $data['notelp']?>">
        </div>
        <div class="form-group col-md-12">
          <label>Kejadian</label>
          <input type="textarea" class="form-control datatext form-control-lg" name="kejadian" value="<?php echo $data['kejadian']?>">
        </div>
      </div>

      <br>
      <button class="btn btn-biru-weCare btn-lg" onclick="">Back</button>

    </form>

    


<footer class="page-footer container2 text-white">
  <div class="footer-copyright text-center py-3">Copyright © 2022 weCare</div>
</footer>


    <script src="js/bootstrap.js"></script>
</body>
</html> 