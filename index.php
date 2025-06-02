<?php
include 'koneksi2.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Portofolio Danny Ahmad Yusuf, mahasiswa informatika dengan minat di teknologi dan inovasi digital." />
  <title>Danny Ahmad Yusuf - Portfolio</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="Style.css" />
</head>
<body>
  <nav>
    <div class="nav-container">
      <a href="#home" class="logo-link">
        <img src="aset/th.jpg" alt="Logo" class="logo-img">
      </a>
      <ul class="nav-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#opini">Opini</a></li>
        <li><a href="#kontak">Contact Me</a></li>
        <li class="dropdown">
          <a href="#">More</a>
          <ul class="dropdown-content">
            <li><a href="https://www.facebook.com/profile.php?id=100078606710272" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com/aku_danny?igsh=MTA3dW00MW9sYTN6ZA==" target="_blank">Instagram</a></li>
            <li><a href="https://www.tiktok.com/@dannyyusuf31?_t=ZS-8w4d70u2dyp&_r=1" target="_blank">Tiktok</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <section id="home" class="hero-section">
    <div class="hero-container">
      <img src="aset/241101063.jpg" alt="Danny Ahmad Yusuf" class="hero-photo">
      <div class="hero-text">
        <h1>Halo, saya <span class="highlight">Danny Ahmad Yusuf</span></h1>
        <h2>Mahasiswa Informatika & Teknologi</h2>
        <p>Saya memiliki ketertarikan mendalam pada dunia teknologi, pemrograman, dan inovasi digital.</p>
        <a href="#about"><input type="submit" name="Submit" value="Kenali saya" id="submit"></a>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="about-container">
      <div class="about-text">
        <h2>Tentang Saya</h2>
        <p>Halo! Saya Danny Ahmad Yusuf, alamat saya Kabupaten Bojonegoro, Kecamatan Trucuk, Desa Banjarsari. Hobi saya membaca novel dan bermain game. Saya seorang mahasiswa semester 2 di Program Studi Teknik Informatika Universitas Nahdlatul Ulama Sunan Giri.</p>
        <p>Saya aktif mengikuti kegiatan seperti lomba infografis, kompetisi teknologi, dan seminar digital. Saya percaya bahwa teknologi adalah jembatan menuju masa depan yang lebih baik.</p>
      </div>
      <div class="about-image">
        <img src="aset/IMG-20230203-WA0002.jpg" alt="Danny Ahmad Yusuf">
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio-section">
    <h2 class="section-title">Portfolio</h2>
     <a href="data.php" class="btn-tambah">Tambah</a>
    <div class="table-wrapper">
      <table class="portfolio-table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal Kegiatan</th>
            <th>Bukti</th>
          </tr>
        </thead>
         <tbody>
          <?php
          $query = "SELECT * FROM portofolio";
          $result = mysqli_query($koneksi, $query);
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $no++ . "</td>";
              echo "<td>" . $row['Nama_kegiatan'] . "</td>";
              echo "<td>" . $row['Tanggal'] . "</td>";
              echo "<td><img src='uploads/" . $row['Bukti'] . "' alt='Bukti' class='sertifikat-img'></td>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>

  <section id="opini" class="opini-section">
    <h2 class="section-title">Opini</h2>
    <div class="opini-grid">
      <!-- Baris Atas -->
      <a href="https://www.w3schools.com/html/default.asp" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="aset/html.png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Belajar HTML</h3>
          </div>
        </div>
      </a>
      
      <a href="https://medium.com/amcc-amikom/langkah-awal-dalam-web-development-pengenalan-dasar-html-0cee1e9fd19a" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="aset/1_HLa-gkmB71pcT7jZ7gJAFg.png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Dasar Web Development</h3>
          </div>
        </div>
      </a>
  
      <a href="https://dash.infinityfree.com/" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="aset/Screenshot (368).png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Web Hosting</h3>
          </div>
        </div>
      </a>
  
      <!-- Baris Bawah -->
      <a href="mockup.html" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="aset/Screenshot (36).png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Belajar membuat mockup</h3>
          </div>
        </div>
      </a>
  
      <a href="https://myskill.id/bootcamp/ui-ux-design-short-class" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="aset/Screenshot (369).png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>kelas UI/UX design</h3>
          </div>
        </div>
      </a>
  
      <a href="https://www.w3schools.com/CSS/" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="aset/CSS.png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Belajar CSS</h3>
          </div>
        </div>
      </a>
  </section>

  <section id="kontak" class="kontak-section">
    <h2 class="section-title">Hubungi saya</h2>
    <div class="kontak-container">
      <form class="kontak-form">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Masukkan email anda" required />
  
        <label for="name">Nama</label>
        <input type="text" id="name" placeholder="Masukkan nama anda" required />
  
        <label for="subject">Subjek</label>
        <input type="text" id="subject" placeholder="Subjek pesan" required />
  
        <label for="message">Isi</label>
        <textarea id="message" rows="4" placeholder="Tulis pesan anda disini" required></textarea>
        
  
        <button type="submit">Kirim</button>
      </form>
  
      <div class="kontak-map">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.652247223674!2d111.881473!3d-7.136672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDgnMTIuMCJTIDExMcKwNTInNTMuMyJF!5e0!3m2!1sid!2sid!4v1714798234297!5m2!1sid!2sid"
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
        </iframe>
      </div>
    </div>
  </section> 

  <footer>
    <p>Copyright © 2025 by DAY</p>
    <p>Temukan saya di: 
      <a href="https://www.facebook.com/profile.php?id=100078606710272" target="_blank">Facebook</a> | 
      <a href="https://www.instagram.com/aku_danny?igsh=MTA3dW00MW9sYTN6ZA==" target="_blank">Instagram</a> | 
      <a href="https://www.tiktok.com/@dannyyusuf31?_t=ZS-8w4d70u2dyp&_r=1" target="_blank">Tiktok</a>
    </p>
  </footer>
</body>
</html>