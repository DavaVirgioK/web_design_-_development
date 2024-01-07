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

  $rows = "SELECT * FROM laporan";
 
  $sql = $conn->query($rows);
  $i = 1;
   

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
  <div class="container">
    <h2>Lihat Laporan</h2>         
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Id Laporan</th>
          <th>Id Username</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php while($result = $sql->fetch_assoc())
        {
          
          $id = $result['id'];
      ?>
          <tr>
            <th><?= $i ?></th>
            <th><?= $id ?></th>
            <th><?= $result['id_username'] ?></th>
            <th><?= $result['status'] ?></th>
            <th>
              <a href="approvelaporan.php?id=<?php echo $id; ?>" class="btn btn-success">Approve</a>
              <a href="rejectlaporan.php?id=<?php echo $id; ?>"class="btn btn-danger">Reject</a>
              <a href="checklaporanadmin.php?id=<?php echo $id; ?>"class="btn btn-warning">Lihat Laporan</a>
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