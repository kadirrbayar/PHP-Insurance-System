<?php
include_once '../connection.php';

if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) {
    if (isset($_GET['Id'])) {
        $id = $_GET['Id'];
        if (empty($id)) {
            header("Location: blogList.php");
            exit();
        }
        $delete_query = "DELETE FROM blog WHERE Id = ?";
        $delete = $conn->prepare($delete_query);
        $delete->execute([$id]);
        header("Location: blogList.php");
        exit();
    } else {
        header("Location: blogList.php");
        exit();
    }
}
