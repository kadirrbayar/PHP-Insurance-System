<?php
include_once '../connection.php';

if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) {
    if (isset($_POST['Title']) && isset($_POST['ImageUrl']) && isset($_POST['Category']) && isset($_POST['Description'])) {

        $Title = validate($_POST['Title']);
        $ImageUrl = validate($_POST['ImageUrl']);
        $Category = validate($_POST['Category']);
        $Description = validate($_POST['Description']);
        $Date = date("Y-m-d");

        if (empty(isset($_POST['Id']))) {
            if (empty($Title)) {
                header("Location: blogAdd.php?error=" . urlencode("Ad alanı gereklidir."));
                exit();
            } else if (empty($ImageUrl)) {
                header("Location: blogAdd.php?error=" . urlencode("Görsel alanı gereklidir."));
                exit();
            } else if (empty($Category)) {
                header("Location: blogAdd.php?error=" . urlencode("Kategori alanı gereklidir."));
                exit();
            } else if (empty($Description)) {
                header("Location: blogAdd.php?error=" . urlencode("Açıklama alanı gereklidir."));
                exit();
            } else {
                $insert_query = "INSERT INTO blog(Title, ImageUrl, Category, Description, Date) VALUES (?, ?, ?, ?, ?)";
                $insert = $conn->prepare($insert_query);
                $insert->execute([$Title, $ImageUrl, $Category, $Description, $Date]);
                header("Location: blogList.php");
                exit();
            }
        } else {
            $id = validate($_POST['Id']);
            if (empty($Title)) {
                header("Location: blogEdit.php?Id=$id&&error=" . urlencode("Ad alanı gereklidir."));
                exit();
            } else if (empty($ImageUrl)) {
                header("Location: blogEdit.php?Id=$id&&error=" . urlencode("Görsel alanı gereklidir."));
                exit();
            } else if (empty($Category)) {
                header("Location: blogEdit.php?Id=$id&&error=" . urlencode("Kategori alanı gereklidir."));
                exit();
            } else if (empty($Description)) {
                header("Location: blogEdit.php?Id=$id&&error=" . urlencode("Açıklama alanı gereklidir."));
                exit();
            } else {
                $update_query = "UPDATE blog SET Title = ?, ImageUrl = ?, Category = ?, Description = ?, Date = ? WHERE Id = ?";
                $update = $conn->prepare($update_query);
                $update->execute([$Title, $ImageUrl, $Category, $Description, $Date, $id]);
                header("Location: blogList.php");
                exit();
            }
        }
    } else {
        header("Location: blogList.php");
        exit();
    }
}