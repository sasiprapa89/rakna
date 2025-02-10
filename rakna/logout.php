<?php
session_start();
$_SESSION["logout_msg"] = "คุณออกจากระบบเรียบร้อยแล้ว 💖";
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>
