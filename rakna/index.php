<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💖 เข้าสู่ระบบ วาเลนไทน์ 💖</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            color: white;
        }
        .container {
            background: white;
            padding: 25px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: center;
            width: 350px;
        }
        h2 {
            color: #ff4d6d;
        }
        input {
            width: 80%;
            padding: 12px;
            margin: 12px 0;
            border: 2px solid #ff4d6d;
            border-radius: 8px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #ff4d6d;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #e63950;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>💘 เข้าสู่ระบบ 💘</h2>
        <p class="heart">❤️💖💘</p>
        <form action="process.php" method="POST">
            <input type="password" name="password" placeholder=" กรอกรหัสผ่าน " required>
            <button type="submit">💞 เข้าสู่ระบบ 💞</button>
        </form>
    </div>
</body>
</html>
