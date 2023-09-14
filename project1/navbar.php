<?php
require 'sayfa.ust.php';
?>
  
  
  <!DOCTYPE html>
<html>
<head>
    
    <title>Web Sitenizin Başlığı</title>
    <style>
        body {
            background-image: url('/assets/2.jpeg'); /* Resmin yolunu belirtin */
            background-size: cover; /* Resmi sayfa boyutuna sığdır */
            background-repeat: no-repeat; /* Resmi yinelemeyi kapat */
        }
    </style>

    
</head>
<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="anasayfa.php">Hoşgeldiniz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="anasayfa.php">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="rez.php">Rezervasyon</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sss.php">Sıkça Sorulan Sorular</a>
        </li>
    

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hizmetlerimiz
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="dugun.php">Düğün</a></li>
            <li><a class="dropdown-item" href="kına.php">Kına</a></li>
            <li><a class="dropdown-item" href="nisan.php">Nişan</a></li>
            <li><a class="dropdown-item" href="baby.php">Babyshower</a></li>
            <li><a class="dropdown-item" href="mezun.php">Mezuniyet</a></li>
            <li><a class="dropdown-item" href="dogum.gunu.php">Doğum Günü</a></li>
            <li><a class="dropdown-item" href="bekarlik.php">Bekarlığa Veda</a></li>
            <li><a class="dropdown-item" href="teklif.php">Evlilik Teklifi</a></li>
            <li><a class="dropdown-item" href="cinsiyet.php">Cinsiyet Partisi</a></li>
            <li><a class="dropdown-item" href="acılıs.php">Açılış Partisi</a></li>
            <li><a class="dropdown-item" href="tekne.php">Tekne Partisi</a></li>
            <li><a class="dropdown-item" href="yenidogan.php">Yenidoğan Çekim</a></li>
            



          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="hakkimizda-link">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="iletisim-link">İletişim</a>
        </li>
      </ul>
      <button type="button" class="btn btn-light">
        <span>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
</svg>
Paylaş
</span>



<a href="kayitol.php">
  <button type="button" class="btn btn-light">
    <span>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
      Kayıt Ol
    </span>
  </button>
</a>

<a href="girisyap.php">
  <button type="button" class="btn btn-light">
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
      Giriş Yap
    </span>
  </button>
</a>


    </div>
  </div>
</nav>





 
  






  <?php require_once 'sayfa.alt.php'; ?>