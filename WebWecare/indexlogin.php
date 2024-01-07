<?php
  include 'loggedin.php';
  include 'koneksi.php';
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
  <div class="container-fluid banner my-5 pt-2">
      <div class="container text-center">
        <p class="h1">Selamat Datang di weCare</p>
        <h3 class="display-2">kami siap membantu <hr></h4>
     
      </div>
    </div>

<div class="container p-5 pb-5">
      <div class="row">
        <div class="col-3 ">
          
          <img src="Working-pana.png" class="img-fluid pb-3">
          <center><h2>Buat Laporan</h2></center>  
           
        </div>
        <div class="col-3 ">

           <img src="Doctors-rafiki.png" class="img-fluid pb-3">
          <center><h2>Chat Dengan Ahli</h2></center>  

        </div>
        <div class="col-3 ">

           <img src="Messaging fun-pana.png" class="img-fluid pb-3">
          <center><h2>Konten Edukasi</h2></center>  
        </div>

        <div class="col-3">

           <img src="Getting Coffee-pana.png" class="img-fluid pb-3">
          <center><h2>Biar kamu tenang</h2></center>  

        </div>
    <br>
    

  </div>
</div>

<div class="container2 p-5">
  <div class="row justify-content-start pt-5">
        <div class="col-4">
           <img src="logo-content.png" class="img-fluid pb-5">
        </div>
        <div class="col-8 pt-3 pl-5" >
         <b><p class="h1 text-biru-weCare">weCare</p></b>
          <br>
          <p>Kami bantu kamu untuk melaporkan kekerasan seksual, menenangkan kamu dan memfasilitasi kamu buat chat dengan dokter, psikolog, dan hukum</p>
        </div>
    </div>
</div>


<div class="container3 text-biru-tua-weCare ">
    
    <div class="container-fluid banner p-5">
      <div class="container text-center">
        <p class="h1">Apakah kamu tahu?</p>

        <h3 class="display-1 font-weight-bold text-biru-weCare">57% </h3> <p class="h1">Kasus kekerasan seksual di indonesia tidak ada penyelesaian  </p> 
        <br><br>
        <p class="h4">Oleh karena itu ayo laporkan kasus kekerasan seksual kamu biar bisa kita tindak lanjuti!!!</p><br>
        <a href="pageLapor.php"> <button type="button"  class="btn btn-biru-weCare btn-lg">Lapor Disini</button></a>
      </div>
    </div>
</div>


  <footer class="page-footer container2 text-white">


    <div class="footer-copyright text-center py-3">Copyright © 2022 weCare</div>
   

  </footer>


    <script src="js/bootstrap.js"></script>
</body>
</html> 