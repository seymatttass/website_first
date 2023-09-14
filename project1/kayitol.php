<?php
require 'sayfa.ust.php';
require 'navbar.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'db.php';

    $ad = $_POST["ad_form"];
    $soyad = $_POST["soyad_form"];
    $telefon = $_POST["telefon_form"];
    $mail = $_POST["mail_form"];
    $parola = $_POST["parola_form"];

    // Veritabanına ekleme işlemi
    $sql = "INSERT INTO musteriler (ad, soyad, telefon, mail, parola) VALUES (:ad_form, :soyad_form, :telefon_form, :mail_form, :parola_form)";
    $stmt = $DB->prepare($sql);

    
    $stmt->bindParam(":ad_form", $ad);
    $stmt->bindParam(":soyad_form", $soyad);
    $stmt->bindParam(":telefon_form", $telefon);
    $stmt->bindParam(":mail_form", $mail);
    $stmt->bindParam(":parola_form", $parola);

    try {
        $stmt->execute();
        echo "Üyelik başarıyla oluşturuldu!";
    } catch (PDOException $e) {
        echo "Üyelik oluşturulurken bir hata oluştu: " . $e->getMessage();
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
                        <h2 class="card-title">Üye Ol</h2>
                        <form method="POST" action=""> <!-- action boş bırakılarak aynı sayfaya yönlendirebilirsiniz -->
                            <div class="mb-3">
                                <label for="ad" class="form-label">Adınız:</label>
                                <input type="text" class="form-control" id="ad" name="ad_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="soyad" class="form-label">Soyadınız:</label>
                                <input type="text" class="form-control" id="soyad" name="soyad_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefon" class="form-label">Telefon numaranız:</label>
                                <input type="text" class="form-control" id="telefon" name="telefon_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="mail" class="form-label">Mail adresiniz:</label>
                                <input type="text" class="form-control" id="mail" name="mail_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="parola" class="form-label">Parolanız:</label>
                                <input type="text" class="form-control" id="parola" name="parola_form" required>
                            </div>
                            <button type="submit" class="btn btn-warning">Üye Ol</button>
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
