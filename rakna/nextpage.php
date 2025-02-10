<?php
session_start();

// ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือไม่
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php"); // ถ้าไม่ได้เข้าสู่ระบบจะถูกเปลี่ยนหน้าไปที่หน้า index
    exit();
}

// ตั้งค่าชื่อผู้ใช้ (ถ้ามีข้อมูลจากฐานข้อมูลให้ดึงมาแสดง)
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "Guest";

// ตั้งค่าข้อความบอกรักแบบสุ่ม
$loveMessages = [
    "รักอ้วนนะ 💖",
    "อยู่ด้วยกันตลอดเลยไปนะ 💕",
    "อยากให้อ้วนอยู่ในทุกๆความสำเร็จของหนูนะ 💘"
];
$randomLoveMessage = $loveMessages[array_rand($loveMessages)];

// ตรวจสอบว่ามีรูปโปรไฟล์ที่อัปโหลดแล้วหรือไม่
$profileImage = isset($_SESSION["profile_image"]) ? $_SESSION["profile_image"] : "default-avatar.png"; // ถ้าไม่มีให้ใช้ default-avatar.png
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌸 หน้าหลักของคุณ 🌸</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            color: white;
        }
        .container {
            background: white;
            padding: 25px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: center;
            width: 400px;
        }
        h2 {
            color: #ff4d6d;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        .heart {
            font-size: 30px;
            animation: heartbeat 1s infinite;
        }
        @keyframes heartbeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 3px solid #ff4d6d;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            font-size: 16px;
            color: #fff;
            background-color: #ff4d6d;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #e63950;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>💘 สวัสดี, <?php echo htmlspecialchars($username); ?>! 💘</h2>
        <!-- แสดงรูปโปรไฟล์จากโฟลเดอร์ img -->
        <img src="img/<?php echo $profileImage; ?>" alt="Profile Image" class="profile-img">
        <p class="heart">❤️💖💘</p>
        <p><strong><?php echo $randomLoveMessage; ?></strong></p>
        <a href="dashboard.php" class="btn">ไปที่แดชบอร์ด</a>
        <a href="logout.php" class="btn">ออกจากระบบ</a>
    </div>
</body>
</html>
