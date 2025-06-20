<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    .background-image {
        background-image: url('gambar/login.png');
        background-size: cover; 
        background-repeat: no-repeat; 
        background-position: center; 
        background-attachment: fixed; 
        height: 100vh;
        margin: 0;
        padding: 0;
    }
    </style>
</head>
<body class="background-image">
    <form id="loginForm" method="POST" action="aksi_login.php">
        <table align="center" style="margin-top: 200px; border: 2px solid; width: 400px; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" border="2">
            <tr>
                <td><label for="user">Username:</label></td>
                <td><input type="text" name="user" id="user" placeholder="username"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="pass" id="pass" placeholder="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="button" id="loginButton" value="Login">
                </td>
            </tr>
        </table>
    </form>

    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            const username = document.getElementById('user').value.trim();
            const password = document.getElementById('pass').value.trim();



            
            if (!username || !password) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Username dan password harus diisi!'
                });
            } else {
                // Jika login berhasil
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil!',
                    text: 'Selamat datang!'
                }).then(() => {
                    document.getElementById('loginForm').submit(); // Kirim formulir
                });
            }
        });
    </script>
</body>
</html>
