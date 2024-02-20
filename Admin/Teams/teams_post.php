<?php
include_once '../connection.php';

if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) {
    if (isset($_POST['name']) && isset($_POST['status']) && isset($_POST['ImageUrl']) && isset($_POST['socialmedia1'])
        && isset($_POST['socialmedia2']) && isset($_POST['socialmedia3']) && isset($_POST['socialmedia4']) && isset($_POST['phone'])) {

        $name = validate($_POST['name']);
        $status = validate($_POST['status']);
        $ImageUrl = validate($_POST['ImageUrl']);
        $phone = validate($_POST['phone']);
        $SocialMedia1 = validate($_POST['socialmedia1']);
        $SocialMedia2 = validate($_POST['socialmedia2']);
        $SocialMedia3 = validate($_POST['socialmedia3']);
        $SocialMedia4 = validate($_POST['socialmedia4']);

        if (empty(isset($_POST['Id']))) {
            if (empty($name)) {
                header("Location: teamsAdd.php?error=" . urlencode("Ad alanı gereklidir."));
                exit();
            } else if (empty($status)) {
                header("Location: teamsAdd.php?error=" . urlencode("Ünvan alanı gereklidir."));
                exit();
            } else if (empty($ImageUrl)) {
                header("Location: teamsAdd.php?error=" . urlencode("Görsel alanı gereklidir."));
                exit();
            } else if (empty($phone)) {
                header("Location: teamsAdd.php?error=" . urlencode("Telefon alanı gereklidir."));
                exit();
            } else {
                $insert_query = "INSERT INTO teams(Name, Status, ImageUrl, Phone, SocialMedia1, SocialMedia2, SocialMedia3, SocialMedia4) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $insert = $conn->prepare($insert_query);
                $insert->execute([$name, $status, $ImageUrl, $phone, $SocialMedia1, $SocialMedia2, $SocialMedia3, $SocialMedia4]);
                header("Location: teamsList.php");
                exit();
            }
        } else {
            $id = validate($_POST['Id']);
            if (empty($name)) {
                header("Location: teamsEdit.php?Id=$id&&error=" . urlencode("Ad alanı gereklidir."));
                exit();
            } else if (empty($status)) {
                header("Location: teamsEdit.php?Id=$id&&error=" . urlencode("Ünvan alanı gereklidir."));
                exit();
            } else if (empty($ImageUrl)) {
                header("Location: teamsEdit.php?Id=$id&&error=" . urlencode("Görsel alanı gereklidir."));
                exit();
            } else if (empty($phone)) {
                header("Location: teamsEdit.php?Id=$id&&error=" . urlencode("Telefon alanı gereklidir."));
                exit();
            } else {
                $update_query = "UPDATE teams SET Name = ?, Status = ?, ImageUrl = ?, Phone = ?, SocialMedia1 = ?, SocialMedia2 = ?, SocialMedia3 = ?, SocialMedia4 = ? WHERE Id = ?";
                $update = $conn->prepare($update_query);
                $update->execute([$name, $status, $ImageUrl, $phone, $SocialMedia1, $SocialMedia2, $SocialMedia3, $SocialMedia4, $id]);
                header("Location: teamsList.php");
                exit();
            }
        }
    } else {
        header("Location: teamsList.php");
        exit();
    }
}