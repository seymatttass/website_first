<form action="" method="POST">
    ADI <input type='text' name='adi'> <br>
    ePosta <input type='text' name='eposta'> <br>
    <input type='submit' value='KAYIT EKLE'> <br>

</form>

<?php

if (isset($_POST['adi'])) {


    //kayıt ekle.
    require  "baglan.php";


    $name  = $_POST['adi'];
    $email = $_POST['eposta'];

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $SORGU = $DB->prepare($sql);    //Sorguyu hazırla.

    $SORGU->bindParam(':name', $name);   //Değişkenleri bağlıyoruz.Böyle yazılması daha güvenli.
    $SORGU->bindParam(':email', $email);

    $SORGU->execute();
    echo "kullanıcı eklendi";
}
