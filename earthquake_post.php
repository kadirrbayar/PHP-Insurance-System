<?php
include_once 'connection.php';

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['tcno']) && isset($_POST['meters']) && isset($_POST['buildingyear']) && isset($_POST['adres'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $tcno = validate($_POST['tcno']);
    $meters = validate($_POST['meters']);
    $insayili = validate($_POST['buildingyear']);
    $adres = validate($_POST['adres']);

    if (empty($name)) {
        echo 'Ad alanı boş bırakılamaz';
    } else if (empty($phone)) {
        echo 'Telefon No alanı boş bırakılamaz';
    } else if (empty($tcno)) {
        echo 'Tc No alanı boş bırakılamaz';
    } else if (empty($meters)) {
        echo 'Metrekare alanı boş bırakılamaz';
    } else if (empty($insayili)) {
        echo 'İnşaat Yılı boş bırakılamaz';
    } else if (empty($adres)) {
        echo 'Adres alanı boş bırakılamaz';
    } else {
        $insert_query = "INSERT INTO request(Name, Phone, TCNo, RequestType, Meters, BuildingYear, Adress) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insert = $conn->prepare($insert_query);
        $insert->execute([$name, $phone, $tcno, 'Deprem Sigortası', $meters, $insayili, $adres]);
        echo 'Sayın '. $name .' Teklifiniz başarıyla gönderildi. Size en kısa sürede dönüş yapılacaktır.';
    }
} else {
    echo 'Boş alanlar bulunmaktadır. Hata';
}