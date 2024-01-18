<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/navbartest.css">
    <title>Dog Foods - Jordan's Pets Shop</title>
  </head>
  <body style="background-color: #f1f8e5;">
    <?php 
      $koneksi =  mysqli_connect("localhost", "root", "", "petshop");
    ?>
    
    <!--navbar-->
    <nav class="nav-bar navbar-fixed-top">
      <div class="con">
            <img src="foto/logo.png" alt="" width="55" height="54" style="border-radius:50% ;">
            <a class="navbar-brand text-light" style="margin-right: 650px;" href="#">Jordan's Pets Shop</a>
            <div class="nav-menu">
                <a href="index(home).html">Home</a>
                <a href="aboutus1.html">About Us</a>
                <a href="index(services).html">Services</a>
                <a class="nav-link dropdown-toggle textform1 text-decoration-none" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Product
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-dark"  href="allproduk.html">All Products</a></li>
                    <li><a class="dropdown-item text-dark"  href="dogfood.html">Dog Foods</a></li>
                    <li><a class="dropdown-item text-dark" href="Catfood.html">Cat Foods</a></li>
                    <li><a class="dropdown-item text-dark" href="Petsampo.html">Pet Shampoo</a></li>
                    <li><a class="dropdown-item text-dark"  href="dogsnack.html">Dog Snacks</a></li>
                    <li><a class="dropdown-item text-dark"  href="Catsnack.html">Cat Snacks</a></li>
                    <li><a class="dropdown-item text-dark" href="others.html">Others</a></li>
                  </ul>
                <a href="cotactus.html">Contact Us</a>
            </div>
        </div>
    </nav>

    <!--Gambar Corousel-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="foto/ban-makan2.jpg" class="d-block w-100" style="height: 300px;">
        </div>
        <div class="carousel-item">
          <img src="foto/ban-makan1.jpg" class="d-block w-100" style="height: 300px;">
        </div>
        <div class="carousel-item">
          <img src="foto/ban-makan3.webp" class="d-block w-100" style="height: 300px;">
        </div>
      </div>
    </div>

    <!--product-->
    <div class="container-xl mt-4 mb-4">
        <h3 class="mb-2 text-center">Dog Foods</h3>
        
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <?php
          $sql="SELECT * FROM tb_dogfood";

          $result = mysqli_query($koneksi, $sql);

            while($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $caption = $row['caption'];
                $image_file = $row['image_file'];
                $harga = $row['price'];
        ?>
          <div class="col">
            <div class="card h-100 border-dark" style="border-radius: 30px;">
                <a class="text-dark" style="text-decoration: none;" href="#">
              <img src="foto/<?php echo $image_file; ?>" class="card-img-top" style="width: 400px; height: 400px; padding-right: 50px; margin-left: 40px;"  >
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo $title; ?></h5>
                <p class="card-text"><?php echo $caption; ?></p>
                  <a href="#" class="btn btn-success" style="margin-left: 200px;"><?php echo('Rp.'.$harga) ?></a>
              </div>
                </a>
            </div>
          </div>
        <?php
          }
  
        ?>

          </div>
        </div>
      </div>
      <a href="#top" title="Go to top"><img id="go-to-top" src="../Foto/paw.png" alt="Go to top" height="45px" width="45x"></a>
      <!--footer-->
    <footer class="text-center text-lg-start text-muted" style="background-color:#52718d;">
      <section>
        <div class="container text-center text-md-start mt-5 ft1">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-4">
              <h6 class="text-uppercase fw-bold mb-4">
              Location
              </h6>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.003102734292!2d106.81621835014124!3d-6.130283361790171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e076112ebad%3A0xacd0a7987f401f11!2sUniversitas%20Bunda%20Mulia!5e0!3m2!1sid!2sid!4v1648052932226!5m2!1sid!2sid" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
  
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
              <h6 class="text-uppercase fw-bold mb-4">About</h6>
              <p>
                <a href="aboutus1.html" class="text-reset">About Us</a>
              </p>
              <p>
                <a href="cotactus.html" class="text-reset">Contact</a>
              </p>
              <p>
                <a href="index(home).html" class="text-reset">Home</a>
              </p>
              <p>
                <a href="index(services).html" class="text-reset">Services</a>
              </p>
            </div>
  
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
              <h6 class="text-uppercase fw-bold mb-4">Social Media</h6>
              <p>
              <div class="icon">
               <a href="https://www.facebook.com"> <img src="../images/icons/facebook.png" width="33" height="33" onmouseover="this.src='../images/icons/facebook_1.png'" onmouseout="this.src='../images/icons/facebook.png'"></a>
                  <a href="https://www.facebook.com" class="text-reset">Facebook</a>
              </p>
              <p>
                <a href="https://www.twitter.com">  <img src="../images/icons/twitter.png" width="33" height="33" onmouseover="this.src='../images/icons/twitter_1.png'" onmouseout="this.src='../images/icons/twitter.png'"></a>
                  <a href="https://www.twitter.com" class="text-reset">Twitter</a>
              </p>
              <p>
               <a href="https://www.instagram.com"><img src="../images/icons/instagram.png" width="33" height="33" onmouseover="this.src='../images/icons/instagram_1.png'" onmouseout="this.src='../images/icons/instagram.png'"></a>
                      <a href="https://www.instagram.com" class="text-reset">Instagram</a>
              </p>
              <p>
               <a href="https://www.youtube.com/watch?v=iik25wqIuFo"> <img src="../images/icons/youtube.png" width="33" height="33" onmouseover="this.src='../images/icons/youtube_1.png'" onmouseout="this.src='../images/icons/youtube.png'"></a>
                      <a href="https://www.youtube.com/watch?v=iik25wqIuFo" class="text-reset" >Youtube</a>
              </p>
              </div>
          </div>
        </div>
      </section>
      </footer>
  
  </body>
</html>