<!-- register.php (Halaman Registrasi) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrasi</title>
</head>
<body>
    <header>
    <?php include('includes/navigation.php'); ?>
    </header>
    <form action="register_process.php" method="post">
        <h1>Daftar Akun</h1>
        <p>Isi formulir di bawah untuk membuat akun baru.</p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Daftar</button>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </form>

    <footer>
        <p>©Copyright by 21552011425_ARIFIN MULQA MAULANA_TIFRP221PB 2023</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
