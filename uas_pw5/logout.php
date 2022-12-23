<?php
session_start();
session_destroy();
echo "<script> alert('Anda Telah Logout, Terimakasih telah mengunjungi website kami !!'); window.location = 'login.php'; </script>";
echo "<meta http-equiv='refresh' content='2;url=login.php'>";
?>