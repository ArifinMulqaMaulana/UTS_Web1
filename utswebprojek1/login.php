<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <?php include('includes/navigation.php'); ?>
    </header>
    <form action="login_process.php" method="post">
        <h1>Selamat Datang di Perusahaan ABC</h1>
        <p>Silakan login untuk mengakses menu utama.</p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </form>
    <?php include('login_process.php'); ?>
    <footer>
        <p>©Copyright by 21552011425_ARIFIN MULQA MAULANA_TIFRP221PB 2023</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
