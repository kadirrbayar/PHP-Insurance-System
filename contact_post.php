<?php
include_once 'connection.php';

if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = validate($_POST['name']);
    $mail = validate($_POST['mail']);
    $subject = validate($_POST['subject']);
    $message = validate($_POST['message']);

    if (empty($name)) {
        echo 'Ad alanı boş bırakılamaz';
    } else if (empty($mail)) {
        echo 'Mail alanı boş bırakılamaz';
    } else if (empty($subject)) {
        echo 'Konu alanı boş bırakılamaz';
    } else if (empty($message)) {
        echo 'Mesaj alanı boş bırakılamaz';
    } else {
        $insert_query = "INSERT INTO request(Name, Mail, Subject, Message, RequestType) VALUES (?, ?, ?, ?, ?)";
        $insert = $conn->prepare($insert_query);
        $insert->execute([$name, $mail, $subject, $message, 'Mesaj']);
        echo 'Sayın '. $name .' Teklifiniz başarıyla gönderildi. Size en kısa sürede dönüş yapılacaktır.';
    }
} else {
    echo 'Boş alanlar bulunmaktadır. Hata';
}