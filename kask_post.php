<?php
include_once 'connection.php';

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['tcno']) && isset($_POST['plate']) && isset($_POST['teklifTipi']) && isset($_POST['job']) && isset($_POST['documentno'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $tcno = validate($_POST['tcno']);
    $plate = validate($_POST['plate']);
    $documentno = validate($_POST['documentno']);
    $job = validate($_POST['job']);
    $teklifTipi = validate($_POST['teklifTipi']);

    if (empty($name)) {
        echo 'Ad alanı boş bırakılamaz';
    } else if (empty($phone)) {
        echo 'Telefon No alanı boş bırakılamaz';
    } else if (empty($tcno)) {
        echo 'Tc No alanı boş bırakılamaz';
    } else if (empty($plate)) {
        echo 'Plaka alanı boş bırakılamaz';
    } else if (empty($documentno)) {
        echo 'Döküman No alanı boş bırakılamaz';
    } else if (empty($job)) {
        echo 'Meslek alanı boş bırakılamaz';
    } else if (empty($teklifTipi)) {
        echo 'Teklif tipi alanı boş bırakılamaz';
    } else {
        $insert_query = "INSERT INTO request(Name, Phone, TCNo, Plate, DocumentNo, RequestType, Job, Type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $insert = $conn->prepare($insert_query);
        $insert->execute([$name, $phone, $tcno, $plate, $documentno, 'Kasko', $job, $teklifTipi]);
        echo 'Sayın '. $name .' Teklifiniz başarıyla gönderildi. Size en kısa sürede dönüş yapılacaktır.';
    }
} else {
    echo 'Boş alanlar bulunmaktadır. Hata';
}