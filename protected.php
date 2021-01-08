<?php

include_once ("./inc/config.php");
 
$db = new Db();

if (!$db->connect()) {
    die("Hata: Veritabanına bağlanırken bir hata oluştu." . $db->error());
}
$user = $_SESSION["login_user"];
if (!$user) {
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Staj Odevim-Meryem Nur Demir</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="http://localhost/stajodevim/">MERYEM NUR DEMİR-STAJ 1 ÖDEVİ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <?php
                if ($user) {
                    echo '<li class="nav-item"><a class="nav-link" href="http://localhost/stajodevim/logout.php">Çıkış Yap</a></li>';
                } else {
                    echo '
                        <li class="nav-item"><a class="nav-link" href="http://localhost/stajodevim/register.php">Kayıt Ol</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/stajodevim/login.php">Giriş Yap</a></li>';
                }
            ?>
 
 
        </ul>
    </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12"><hr></div>
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    <?php
                    if ($user) {
                        echo 'Tebrikler! Oturum açtınız.';
                    }
                    ?>
                    <hr>
                    Bu sayfayı sadece Oturum Açmış Kullanıcılarımız Görebilir.
                </div>
            </div>
            <div class="col-md-12">
                <h1>Hello, world!</h1>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>