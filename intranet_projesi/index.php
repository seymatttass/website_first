

<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Sitenizin Başlığı</title>
    <style>
        body {
            background-image: url('/assets/1.jpg'); /* Resmin yolunu belirtin */
            background-size: cover; /* Resmi sayfa boyutuna sığdır */
            background-repeat: no-repeat; /* Resmi yinelemeyi kapat */
        }
    </style>
</head>
<body>
    



</body>
</html>





<style>
  .menu-buton {
    /* Arka plan rengini burada değiştirin */
    color: white; /* Yazı rengini beyaz olarak ayarladık */
    width: 20%; /* Buton genişliğini yüzde olarak ayarlayın */
    margin-bottom: 10px; /* Butonlar arasında boşluk eklemek için kullanabilirsiniz */
  }
</style>






<!-- YETKİLİ KİŞİLER MENÜSÜ -->
<?php if ($_SESSION['rol'] == 2) { ?>
  <div class='row text-center'>
    <p><a href='list.php' class="btn btn-info menu-buton "> Personel Yönetimi </a></p>
  </div>
  <div class='row text-center'>
    <p><a href='yemek.menu.php' class="btn btn-info menu-buton"> Yemek Menüsü </a></p>
  </div>
  <div class='row text-center'>
    <p><a href='formyukle.php' class="btn btn-info menu-buton"> Form Yönetimi</a></p>
  </div>

  <div class='row text-center'>
    <p><a href='talep.yonetimi.php' class="btn btn-info menu-buton"> Talep Yönetimi</a></p>
  </div>

<?php } ?>

<!-- KULLANICILAR MENÜSÜ -->
<div class='row text-center'>
  <p><a href='yemek.list.php' class="btn btn-info menu-buton"> Yemek Listesi </a></p>
</div>
<div class='row text-center'>
  <p><a href='formlar.php' class="btn btn-info menu-buton"> Sık Kullanılan Formlar </a></p>
</div>
<div class='row text-center'>
  <p><a href='duyuru.liste.php' class="btn btn-info menu-buton"> Duyurular </a></p>
</div>
<div class='row text-center'>
  <p><a href='rehber.php' class="btn btn-info menu-buton"> Telefon Rehberi </a></p>
</div>
<div class='row text-center'>
  <p><a href='talep.olustur.php' class="btn btn-info menu-buton"> Talep Oluştur </a></p>
</div>

<?php require_once 'sayfa.alt.php'; ?>