<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Masuk Aplikasi KMS</title>
    <link rel="icon" href="<?= BASEURL; ?>/img/favicon.png" type="png" sizes="18x18">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css">

</head>

<body>
    <div id="card">
        <div id="card-content">
        <div id="card-title">
            <img src="<?= BASEURL;?>/img/logo-fa.png" alt="" width="150" heigth="150">
            <h2>LOGIN</h2>
            <div class="underline-title"></div>
        </div>
        <form method="post" class="form" action="<?= BASEURL; ?>/login/cekLogin/">
            <label for="user-email" style="padding-top:13px">
                &nbsp;Username
            </label>
            <input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password
            </label>
            <input id="user-password" class="form-content" type="password" name="pass" required />
            <div class="form-border"></div>
            <a href="#">
            <legend id="forgot-pass">Lupa password ?</legend>
            </a>
            <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
            <a href="https://t.me/HilmanAji" id="signup">Belum punya Akun ?</a>
            <a href="<?= BASEURL;?>" id="signup">Kembali ke beranda</a>
        </form>
        </div>
    </div>
</body>

</html>