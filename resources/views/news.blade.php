<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link font poppins -->
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;0,900;1,700&display=swap"
    rel="stylesheet"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>News | Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <section class="navigation">
        <div class="container">
          <div class="box-navigation">
            <div class="box">
              <h1 class="T">TASTY FOOD</h1><br><br><br>
                <h1 style="font-size:60px;"><strong>BERITA KAMI</strong></h1>
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
    <!-- card Tasty Food 1-->
    <section class="card-section">
      <div class="container">
        <div class="box-about">
          <div class="box">
            <h1><strong>APA SAJA MAKANAN KHAS NUSANTARA?</strong></h1><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut libero corporis repellat. Quia aliquid, est sit laborum vel nulla cum dicta quo repudiandae, recusandae harum error incidunt repellat dolores dolore.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repellat dignissimos odio inven illum, illo reprehenderit iusto doloribus temporibus explicabo quod expedita quia voluptatum tempora consequatur nobis numquam nesciunt necessitatibus.</p>
            <div class="btn-group-vertical">
            <a href="#about"><button type="button" class="btn btn-dark mt-3 px-5 ">BACA SELENGKAPNYA</button></a>
            </div>
          </div>
          <!-- card 1 -->
          <div class="box" style="flex-direction: row-reverse;">
            <img src="/imgasset/galeri-9.jpg" alt="" width="450px">
          </div>
        </div>
      </div>
    </section>
    <!-- berita lainnya -->
    <section class="news-section">

      <div class="container">
      <h3 class="news" style="margin-top: 50px;"><b>BERITA LAINNYA</b> </h3>
        <div class="card-group" style="margin-top: 50px;">
      <div class="card gp-5" style="border-style: none;">
        <img src="{{ asset('imgasset/news-10.jpg') }}" class="card-img-top" height="229px" alt="..." style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 1</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-3.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 2</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing</p>
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-11.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 3</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to lorem lorem</p>
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 4</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to lorem lorem</p>
          <a href="#" class="card-link" style="margin-top: 3px;">Baca Selengkapnya</a>
        </div>
      </div>
      </div>
  </div>
  <!-- baris 2 news -->
      <div class="container">
        <div class="card-group" style="margin-top: 50px;">
      <div class="card gp-5" style="border-style: none;">
        <img src="{{ asset('imgasset/news-10.jpg') }}" height="229px" class="card-img-top" alt="..." style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 5</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor sit amet</p>
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-3.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 6</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, labore!</p>
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-11.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 7</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to</p>
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 8</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to</p>
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
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
  
    <!-- <div class="container">
        <h3 class="news" style="margin-top: 50px;"><b>BERITA LAINNYA</b> </h3>
      <main class="grid">
        <article>
          <img src="{{ asset('imgasset/news-10.jpg') }}" alt="" width="300px" height="300px">
          <div class="konten">
            <h2><strong>News 1</strong></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugiat itaque adipisci fugit velit necessitatibus omnis quos minus soluta nam.</p>
          </div>
        </article>
        <article>
          <img src="{{ asset('imgasset/news-3.jpg') }}" alt="" width="300px" height="300px">
          <div class="konten">
            <h2><strong>News 2</strong></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugiat itaque adipisci fugit velit necessitatibus omnis quos minus soluta nam.</p>
          </div>
        </article>
        <article>
          <img src="{{ asset('imgasset/news-4.jpg') }}" alt="" width="300px" height="300px">
          <div class="konten">
            <h2><strong>News 3</strong></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugiat itaque adipisci fugit velit necessitatibus omnis quos minus soluta nam.</p>
          </div>
        </article>
        <article>
          <img src="{{ asset('imgasset/news-5.jpg') }}" alt="" width="300px" height="300px">
          <div class="konten">
            <h2><strong>News 4</strong></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugiat itaque adipisci fugit velit necessitatibus omnis quos minus soluta nam.</p>
          </div>
        </article>
      </main>
    </div> -->
    </body>
</html>