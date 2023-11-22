<?php
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah form registrasi telah disubmit
    if (
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_POST['confirm_password'])
    ) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validasi data formulir
        if ($password !== $confirm_password) {
            echo "Konfirmasi password tidak sesuai. Silakan coba lagi.";
        } else {
            // Cek apakah username sudah terdaftar
            $check_username = "SELECT * FROM users WHERE username = '$username'";
            $result = $conn->query($check_username);

            if ($result->num_rows > 0) {
                echo "Username sudah terdaftar. Silakan gunakan username lain.";
            } else {
                // Jika semua validasi berhasil, tambahkan pengguna ke database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $insert_user = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
                if ($conn->query($insert_user) === TRUE) {
                    echo "Registrasi berhasil. Silakan login dengan akun Anda.";
                } else {
                    echo "Error: " . $insert_user . "<br>" . $conn->error;
                }
            }
        }
    }
}
?>
