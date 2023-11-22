<?php
// Mulai sesi (pastikan ini ada di setiap file PHP yang melibatkan sesi)
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login atau halaman lainnya setelah logout
header("Location: login.php");
exit;
?>
