<?php
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lakukan validasi login sesuai kebutuhan
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verifikasi kata sandi menggunakan password_verify
        if (password_verify($password, $hashed_password)) {
            // Jika login berhasil, redirect ke Halaman Menu Utama
            header("Location: menu.php");
            exit();
        } else {
            echo "Login gagal. Periksa kembali username dan password Anda.";
        }
    } else {
        echo "Login gagal. Periksa kembali username dan password Anda.";
    }

    $stmt->close();
}

}
?>
