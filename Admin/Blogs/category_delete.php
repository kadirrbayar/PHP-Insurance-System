<?php
include_once '../connection.php';

if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) {
    if (isset($_POST['Id'])) {
        $id = $_POST['Id'];
        if (empty($id)) {
            header("Location: blogList.php");
            exit();
        }
        $delete_query = "DELETE FROM category WHERE Id = ?";
        $delete = $conn->prepare($delete_query);
        $delete->execute([$id]);
        header("Location: blogList.php");
        exit();
    } else {
        header("Location: blogList.php");
        exit();
    }
}
