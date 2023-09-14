<?php
require 'sayfa.ust.php';
require 'navbar.php';






if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'db.php';

    $ad = $_POST["reztarih_form"];
    $soyad = $_POST["aciliyetdurum_form"];
    $telefon = $_POST["etkinlikturu_form"];
    $mail = $_POST["islemturu_form"];
    $parola = $_POST["ozelistekler_form"];

    // Veritabanına ekleme işlemi
    $sql = "INSERT INTO rezervasyonlar (reztarih, aciliyetdurum, etkinlikturu, islemturu, ozelistekler) VALUES (:reztarih_form, :aciliyetdurum_form, :etkinlikturu_form, :islemturu_form, :ozelistekler_form)";
    $stmt = $DB->prepare($sql);

    
    $stmt->bindParam(":reztarih_form", $reztarih);
    $stmt->bindParam(":durum_form", $durum);
    $stmt->bindParam(":etkinlikturu_form", $etkinlikturu);
    $stmt->bindParam(":islemturu_form", $etkinlikturu);
    $stmt->bindParam(":ozelistekler_form", $ozelistekler);

    try {
        $stmt->execute();
        echo "Rezarvasyon isteğiniz başarıyla gönderildi";
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
    <title>Rezervasyon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Rezervasyon Yap</h2>
                        <form method="POST" action=""> <!-- action boş bırakılarak aynı sayfaya yönlendirebilirsiniz -->
                            <div class="mb-3">
                                <label for="reztarih" class="form-label">Rezervasyon Tarihiniz:</label>
                                <input type="text" class="form-control" id="reztarih" name="reztarih_form" required>
                            </div>
                            <div class="mb-3">
                       <label for="durum" class="form-label">Rezervasyon aciliyet durumu:</label>
            
                         <select class="form-select" id="durum" name="durum_form" required>
                       <option value="" disabled selected>Lütfen aciliyet durumunu seçin</option>
                       <option value="Acil">Acil</option>
                       <option value="Orta">Orta</option>
                       <option value="Düşük">Düşük</option>
              </select>
              </div>

                            <div class="mb-3">
    <label for="etkinlikturu" class="form-label">Etkinlik türü:</label>
    <select class="form-select" id="etkinlikturu" name="etkinlikturu_form" required>
        <option value="" disabled selected>Lütfen etkinlik türünü seçin</option>
        <option value="Düğün">Düğün</option>
        <option value="Nişan">Nişan</option>
        <option value="Kına">Kına</option>
        <option value="Mezuniyet">Mezuniyet</option>
        <option value="Babyshower">Babyshower</option>
        <option value="Doğum Günü">Doğum Günü</option>
        <option value="Bekarlığa Veda">Bekarlığa Veda</option>
        <option value="Tekne Partisi">Tekne Partisi</option>
        <option value="Evlilik Teklifi">Evlilik Teklifi</option>
        <option value="Açılış Partisi">Açılış Partisi</option>
        <option value="Yenidoğan Çekim">Yenidoğan Çekim</option>
        <option value="Cinsiyet Partisi">Cinsiyet Partisi</option>


    </select>
</div>

                            <div class="mb-3">
                                <label for="ozelistekler" class="form-label">Özel istekler:</label>
                                <input type="text" class="form-control" id="ozelistekler" name="ozelistekler_form" required>
                            </div>
                            <button type="submit" class="btn btn-warning">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>














<?php
require 'sayfa.alt.php';
?>
