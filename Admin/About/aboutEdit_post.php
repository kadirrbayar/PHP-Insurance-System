<?php
include_once '../connection.php';

if (isset($_POST['Description']) && isset($_POST['Id'])) {

    $description = validate($_POST['Description']);
    $Id = validate($_POST['Id']);
    if (empty($description)) {
        header("Location: aboutEdit.php?error=" . urlencode("Açıklama alanı gereklidir."));
        exit();
    }
    else
    {
        $update_query = "UPDATE about SET Description = ? WHERE Id = ?";
        $update = $conn->prepare($update_query);
        $update->execute([$description, $Id]);
        header("Location: aboutEdit.php");
        exit();
    }
} else {
    header("Location: aboutEdit.php");
    exit();
}
