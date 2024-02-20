<?php
include_once '../connection.php';

if (isset($_SESSION['Id']) && isset($_SESSION['Mail'])) {
    if (isset($_POST['Id']) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['oldpassword'])
        && isset($_POST['password']) && isset($_POST['newpassword'])) {

        $userId = validate($_POST['Id']);
        $name = validate($_POST['name']);
        $mail = validate($_POST['mail']);
        $oldPassword = validate($_POST['oldpassword']);
        $newPassword = validate($_POST['password']);
        $confirmPassword = validate($_POST['newpassword']);

        if (!empty($newPassword) && $newPassword !== $confirmPassword) {
            header("Location: userEdit.php?error=" . urlencode("Yeni şifre ve tekrar şifre alanları uyuşmuyor."));
            exit();
        }
        if (!empty($newPassword)) {
            if (empty($oldPassword)) {
                header("Location: userEdit.php?error=" . urlencode("Eski şifre alanı boş geçilemez"));
                exit();
            } else {
                $stmt = $conn->prepare("SELECT password FROM admins WHERE Id = :userId");
                $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if (!password_verify($oldPassword, $result['Password'])) {
                    header("Location: userEdit.php?error=" . urlencode("Eski şifre doğru değil."));
                    exit();
                } else {
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $updatePasswordStmt = $conn->prepare("UPDATE admins SET Password = :password WHERE Id = :userId");
                    $updatePasswordStmt->bindParam(':userId', $userId, PDO::PARAM_INT);
                    $updatePasswordStmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
                    $updatePasswordStmt->execute();
                }
            }
        }
        if (empty($name)) {
            header("Location: userEdit.php?error=" . urlencode("Ad alanı boş geçilemez"));
            exit();
        } elseif (empty($mail)) {
            header("Location: userEdit.php?error=" . urlencode("Mail alanı boş geçilemez"));
            exit();
        } else {
            $updateStmt = $conn->prepare("UPDATE admins SET Name = :name, Mail = :mail WHERE Id = :userId");
            $updateStmt->bindParam(':userId', $userId, PDO::PARAM_INT);
            $updateStmt->bindParam(':name', $name, PDO::PARAM_STR);
            $updateStmt->bindParam(':mail', $mail, PDO::PARAM_STR);
            $updateStmt->execute();
        }

        $_SESSION['Name'] = $name;
        $_SESSION['Mail'] = $mail;

        header("Location: userEdit.php?success=" . urlencode("Profil bilgileriniz başarıyla güncellendi."));
        exit();

    } else {
        header("Location: userEdit.php");
        exit();
    }
}
