<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/login/login.css">
    <link rel="stylesheet" href="assets/fikcss/fikcss.css">
    <title>Form Login Aplikasi SPP SMKN 1 KAWALI</title>
</head>

<body>
    <div class="center mt-5">
        <h2>APLIKASI PEMBAYARAN SPP</h2>
    </div>
    <div class="box">
        <form action="ceklogin.php" method="post">
            <div class="container">
                <label for="username">Usename</label>
                <input type="text" name="username" id="username" placeholder="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
                <button type="submit">Login</button>
                <div class="center">
                    <small class="">Dibuat Oleh Fikri Suheri</small>
                </div>
            </div>
        </form>
    </div>
</body>

</html>