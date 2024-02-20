<?php
include_once '../connection.php';

if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) {
    if (isset($_POST['title'])) {
        $title = validate($_POST['title']);
        if (empty($title)) {
            exit();
        } else {
            $insert_query = "INSERT INTO category(Title) VALUES (?)";
            $insert = $conn->prepare($insert_query);
            $insert->execute([$title]);
            header("Location: blogList.php");
            exit();
        }
    } else {
        header("Location: blogList.php");
        exit();
    }
}
