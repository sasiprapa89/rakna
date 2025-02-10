<?php
session_start();

// กำหนดรหัสผ่านที่ถูกต้อง
$correct_password = "300466"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if ($password == $correct_password) {
        $_SESSION["loggedin"] = true;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>alert('รหัสผ่านไม่ถูกอ้วนกรอกใหม่เดี๋ยวนี้!'); window.location.href='index.php';</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
