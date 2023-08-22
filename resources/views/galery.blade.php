<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/galery.css') }}">
    <!-- script js -->
    <!-- <script src="{{ asset('js/galery.js') }}" defer></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- link font poppins -->
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;0,900;1,700&display=swap"
    rel="stylesheet"
    />
    <!-- link remix icon  -->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>Galery | Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <section class="navigation">
        <div class="container">
          <div class="box-navigation">
            <div class="box">
              <h1 class="T">TASTY FOOD</h1><br><br><br>
                <h1 style="font-size:60px;"><strong>GALERI KAMI</strong></h1>
            </div>
            <div class="box">
              <ul>
                <li><a href="/home#">HOME</a></li>
                <li><a href="/about">TENTANG</a></li>
                <li><a href="/news">BERITA</a></li>
                <li><a href="/galery">GALERI</a></li>
                <li><a href="/contact">KONTAK</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    <!-- slide image -->
    <section class="wraper">
      <div class="image-container">
        <div class="carousel">
          <img src="imgasset/galeri-10.jpg" alt="" />
          <img src="imgasset/news-5.jpg" alt="" />
          <img src="imgasset/galeri-11.jpg" alt="" />
          <img src="imgasset/news-10.jpg" alt="" />
        </div>
      <i class="ri-arrow-left-s-line button" id="prev" ></i>
      <i class="ri-arrow-right-s-line button" id="next"></i>
    </div>
  </section>
  <!-- galery section -->
  <section class="galery-section">
  <div class="container">
    <div class="row  row-cols-2 gap-3 justify-content-center">
      <div class="col col-md-2 col-sm-2">
        <img src="{{ asset('imgasset/card-about2.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/galeri-1.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
      <div class="col col-md-2">
        <img src="{{ asset('imgasset/galeri-11.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/galeri-9.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/news-3.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
      <div class="col col-md-2">
        <img src="{{ asset('imgasset/galeri-14.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/news-10.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/galeri-1.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
      <div class="col col-md-2">
        <img src="{{ asset('imgasset/galeri-7.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/news-4.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/galeri-6.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
    </div>
</div>
</section>
 <!-- footer -->
 <section class="footer">
  </div>
      <div class="footer-content  col-md-10">
        <a href="#" class="logo" style="text-decoration: none;">Tasty Food</a>
        <p>
          Lorem ipsum dolor sit amet  consectetur adipisicing elit. Provident
          unde similique quia eum cumque totam facere, voluptas ratione. Libero,
          sed?
        </p>
        <div class="icon">
          <a href="https://www.facebook.com/cyberlabsofficial?mibextid=ZbWKwL"><i class="fa-brands fa-facebook" style="color: #0047c2;"></i></a>
          <a href="#"><i class="fa-brands fa-twitter" style="color: #5291ff;"></i></a>
          <a href="https://www.instagram.com/cyberlabsofficial/"><i class="fa-brands fa-instagram" style="color: #c13584;"></i></i></a>
          <!-- <div class="row">
          <div class="col-md-11 text-center" style="text-align: center;">
            <p>&copy; 2023 Your Website. All rights reserved.</p>
          </div>
          </div> -->
        </div>
        </div>
      </div>

      <div class="footer-content">
        <h4>Useful Links</h4>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Hewan</a></li>
        <li><a href="#">Galeri</a></li>
        <li><a href="#">Testimonial</a></li>
      </div>

      <div class="footer-content">
        <h4>Privacy</h4>
        <li><a href="#">Karir</a></li>
        <li><a href="/about">Tentang Kami</a></li>
        <li><a href="#">Kontak Kami</a></li>
        <li><a href="#">Servis</a></li>
      </div>

      <div class="footer-content">
        <h4>Contact Info</h4>
        <li><a href="#"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i> tastyfood@gmail.com</a></li>
        <li><a href="#"><i class="fa-solid fa-phone" style="color: #ffffff;"></i> +62 812 3456 7890</a></li>
        <li><a href="#"><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Kota Bandung, Jawa Barat</a></li>
      </div>
    </section>

  <!-- images -->
  <!-- <section class="image-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/card-about2.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 1</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/galeri-12.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 2</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/galeri-8.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 3</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/galeri-7.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 4</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/galeri-1.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 5</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/galeri-9.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 6</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/card-about.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 7</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/news-4.png" alt="">
              <div class="overlay">
                <p class="caption">Image 8</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/news-5.png" alt="">
              <div class="overlay">
                <p class="caption">Image 9</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/news-3.png" alt="">
              <div class="overlay">
                <p class="caption">Image 10</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/news-10.png" alt="">
              <div class="overlay">
                <p class="caption">Image 11</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <div class="image-container">
              <img src="imgasset/galeri-6.jpg" alt="">
              <div class="overlay">
                <p class="caption">Image 12</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  </body>
</html>