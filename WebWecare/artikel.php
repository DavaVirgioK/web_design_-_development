<?php
  include 'loggedin.php';
  include 'koneksi.php';
  $username = $_SESSION['username'];

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
  <div class="container-fluid pt-1 pb- ">
        <div class="container text-center">
          <h1 class="display-3" id="staff">ARTIKEL</h1>
          <p>
          berikut ini adalah artikel artikel terbaru yang dapat anda baca
          </p>

          

          <div class="row">
            <div class="col-sm  ">
              <img
              src="download.jpg"
              class="img-fluid rounded float-start "
            />
                <h4>
                    perjuangan korban kekerasan seksual di Indonesia</h4>
                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nam eos, natus tempore corporis in nesciunt cumque accusantium iure totam optio blanditiis veritatis magnam repudiandae quas necessitatibus dolorum cum illum!</p>
                <button type="button" class="btn btn-dark">Read More</button>
            </div>
            
            <div class="col-sm  ">
              <img
              src="gambar2.jpg"
              class="img-fluid rounded float-start "
            />
            <h4>Melindungi anak dari kekerasan seksual</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti totam reprehenderit, suscipit facilis blanditiis quia nesciunt pariatur quis beatae quod eum molestiae itaque quo facere dolorem et magni debitis nostrum.</p>
            <button type="button" class="btn btn-dark">Read More</button>
            </div>
            <div class="col-sm ">
              <img
              src="gambar3.jpg"
              class="img-fluid rounded float-start "
            />
            <h4>UU TPKS Disahkan, Pencegahan Kekerasan Seksual di Kampus Makin Kuat	</h4>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam provident pariatur neque nesciunt dignissimos aliquam ab numquam dicta quidem, autem ipsa ut veritatis modi ducimus magni non harum impedit nisi.</p>
            <button type="button" class="btn btn-dark">Read More</button>
            </div>
           
          
    
        </div>
       
  

    <script src="js/bootstrap.js"></script>
</body>
</html>