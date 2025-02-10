<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💖 ยินดีต้อนรับ 💖</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-color: #ffe6e9;
            color: #d63384;
        }
        .container {
            background: #fff;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: center;
            width: 350px;
        }
        h2 {
            color: #ff4d6d;
        }
        p {
            font-size: 18px;
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
        <h2>ยินดีต้อนรับ! 💕</h2>
        <p>อ้วนเข้าสู่ระบบสำเร็จ 🎉</p>
        <p class="heart">❤️💖💘</p>
        <a href="nextpage.php" class="btn">ไปกันต่อ!!</a>
        <a href="logout.php" class="btn">ออกจากระบบ</a>
    </div>
</body>
</html>
