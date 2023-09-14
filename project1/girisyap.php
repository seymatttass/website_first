<?php
require 'sayfa.ust.php';
?>
  <?php
require 'navbar.php';
?>
 
 

 <?php
session_start();

if (isset($_SESSION['girisyapti'])) {
  // Oturum açmış kullanıcıyı anasayfaya yönlendir
  header("location: anasayfa.php");
  exit(); // Scripti sonlandır
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Form gönderildi, işleme başla

  // 1. Veritabanına bağlan (db.php dosyası gerekmektedir)
  require_once ('db.php');

  // 2. Kullanıcıdan gelen verileri al ve temizle
  $mail = $_POST['mail_form'];
  $parola = $_POST['parola_form'];

  // 3. SQL sorgusunu hazırla ve çalıştır
  $sql = "SELECT * FROM musteriler WHERE mail = :mail AND parola = :parola";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':mail', $mail);
  $SORGU->bindParam(':parola', $parola);

  $SORGU->execute();

  // 4. Sonuçları al
  $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);

  if (count($CEVAP) == 1) {
    // Giriş başarılı
    echo "Giriş Başarılı";
    $_SESSION['girisyapti'] = true;
    $_SESSION['ad'] = $CEVAP[0]['ad'];
    $_SESSION['soyad'] = $CEVAP[0]['soyad'];
    $_SESSION['id'] = $CEVAP[0]['id'];

    // Anasayfaya yönlendir
    header("location: anasayfa.php");
    exit(); // Scripti sonlandır
  } else {
    // Giriş başarısız
    $hata_mesaji = "HATALI EPOSTA veya PAROLA!";
  }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Girişi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Kullanıcı Girişi</h2>
                        <?php if (isset($hata_mesaji)) { ?>
                          <div class="alert alert-danger"><?php echo $hata_mesaji; ?></div>
                        <?php } ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="mail" class="form-label">Mail Adresiniz:</label>
                                <input type="text" class="form-control" id="mail" name="mail_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="parola" class="form-label">Parolanız:</label>
                                <input type="password" class="form-control" id="parola" name="parola_form" required>
                            </div>
                            <button type="submit" class="btn btn-warning">Giriş Yap</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
















 
  






  <?php require_once 'sayfa.alt.php'; ?>