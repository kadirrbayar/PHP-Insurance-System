<?php
include_once '../connection.php';

if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) {
    if (isset($_POST['name']) && isset($_POST['title']) && isset($_POST['description'])) {

        $name = validate($_POST['name']);
        $title = validate($_POST['title']);
        $description = validate($_POST['description']);

        if (empty(isset($_POST['Id']))) {
            if (empty($name)) {
                header("Location: testimonialAdd.php?error=" . urlencode("Ad alanı gereklidir."));
                exit();
            } else if (empty($title)) {
                header("Location: testimonialAdd.php?error=" . urlencode("Başlık alanı gereklidir."));
                exit();
            } else if (empty($description)) {
                header("Location: testimonialAdd.php?error=" . urlencode("Açıklama alanı gereklidir."));
                exit();
            } else {
                $insert_query = "INSERT INTO testimonials(Name, Title, Description) VALUES (?, ?, ?)";
                $insert = $conn->prepare($insert_query);
                $insert->execute([$name, $title, $description]);
                header("Location: testimonialList.php");
                exit();
            }
        } else {
            $id = validate($_POST['Id']);
            if (empty($name)) {
                header("Location: testimonialEdit.php?Id=$id&&error=" . urlencode("Ad alanı gereklidir."));
                exit();
            } else if (empty($title)) {
                header("Location: testimonialEdit.php?Id=$id&&error=" . urlencode("Başlık alanı gereklidir."));
                exit();
            } else if (empty($description)) {
                header("Location: testimonialEdit.php?Id=$id&&error=" . urlencode("Açıklama alanı gereklidir."));
                exit();
            } else {
                $update_query = "UPDATE testimonials SET Name = ?, Title = ?, Description = ? WHERE Id = ?";
                $update = $conn->prepare($update_query);
                $update->execute([$name, $title, $description, $id]);
                header("Location: testimonialList.php");
                exit();
            }
        }
    } else {
        header("Location: testimonialList.php");
        exit();
    }
}