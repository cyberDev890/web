<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Portfolio Website | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Portfolio.</a></div>
      <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About us</a></li>
          <li><a href="#skills">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
          <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
      </ul>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

<!-- Home Section Start -->
 <section class="home" id="home">
   <div class="home-content">
     <div class="text">
       <div class="text-one">Hello,</div>
       <div class="text-two">I'm Rayhan Febriansyah</div>
       <div class="text-three">Mobile Developer</div>
       <div class="text-four">From Indonesian</div>
     </div>
     <div class="button">
       <button>Hire Me</button>
     </div>
   </div>
 </section>

<!-- About Section Start -->
<section class="about" id="about">
  <div class="content">
    <div class="title"><span>About Us</span></div>
  <div class="about-details">
    <div class="left">
      <img src="images/about.JPG" alt="">
    </div>
    <div class="right">
      <div class="topic">Programming Is My Passion</div>
      <p>Halo dan selamat datang di portofolio saya! dan saya seorang pengembang aplikasi mobile dengan pengalaman 1 tahun dalam mengembangkan aplikasi mobile. Saya spesialis dalam membangun aplikasi Android dan iOS menggunakan bahasa pemrograman dart dan java
Berikut adalah beberapa contoh dari pekerjaan saya sebelumnya:
Aplikasi Libman - Android dan iOS
Aplikasi ini adalah aplikasi peminjaman buku di perpustakaan secara online untuk kalangan siswa SMP. Ini memiliki antarmuka yang ramah pengguna dan pemberitahuan dari buku yang dipinjam. Saya mengembangkan aplikasi ini menggunakan bahasa pemrograman dart.</p>
      <div class="button">
      </div>
    </div>
  </div>
  </div>
</section>

<!-- My Skill Section Start -->
<!-- Section Tag and Other Div will same where we need to put same CSS -->
<section class="skills" id="skills">
 <div class="content">
   <div class="title"><span>Blog</span></div>
   <div class="skills-details">
     <div class="text">
       <div class="topic">Skills Reflects Our Knowledge</div>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus natus tenetur tempora? Quasi, rem quas omnis. Porro rem aspernatur reiciendis ut praesentium minima ad, quos, officia! Illo libero, et, distinctio repellat sed nesciunt est modi quaerat placeat. Quod molestiae, alias?</p>
       <div class="experience">
         <div class="num">10</div>
         <div class="exp">Years Of <br> Experience</div>
       </div>
     </div>
     <div class="boxes">
       <div class="box">
         <div class="topic">Flutter</div>
         <div class="per">90%</div>
       </div>
       <div class="box">
         <div class="topic">Java</div>
         <div class="per">80%</div>
       </div>
       <div class="box">
         <div class="topic">SQL</div>
         <div class="per">70%</div>
       </div>
       <div class="box">
         <div class="topic">PHP</div>
         <div class="per">60%</div>
       </div>
     </div>
   </div>
 </div>
</section>


<!-- Contact Me section Start -->
<section class="contact" id="contact">
  <div class="content">
    <div class="title"><span>Contact Me</span></div>
    <div class="text">
      <div class="topic">Have Any Project?</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque ipsum corrupti dolores, facere numquam voluptate aspernatur sit perferendis qui nisi modi! Recusandae deserunt consequatur voluptatibus alias repellendus nobis eligendi.</p>
      <div class="button">
        <button>Let's Chat</button>
      </div>
    </div>
  </div>
</section>

<!-- Footer Section Start -->
<footer>
  <div class="text">
    <span>Created By <a href="#">CyberDev</a> | &#169; 2023 All Rights Reserved</span>
  </div>
</footer>

  <script src="script.js"></script>
</body>
</html>
