document.addEventListener('DOMContentLoaded', function () {
    var loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function (event) {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Validasi sederhana
        if (username.trim() === '' || password.trim() === '') {
            alert('Username dan password harus diisi.');
            event.preventDefault(); // Mencegah pengiriman form jika validasi tidak terpenuhi
        }
    });
});
