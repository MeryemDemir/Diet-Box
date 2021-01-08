<?php

include_once("./inc/config.php");
 
$db = new Db();
 
if (!$db->connect()) {
    die("Hata: Veritabanına bağlanırken bir hata oluştu." . $db->error());
}
$user = $_SESSION["login_user"];
 
if ($user) {
    header("location: index.php");
    exit;
}
if ($_POST) {
   
    $error = false;
    $errors = array();
 
    
     // Form dan gelen bilgileri al
    
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
 
    
    $name = trim($name);
    $surname = trim($surname);
    $username = trim($username);
    $password1 = trim($password1);
    $password2 = trim($password2);
 
 
    if (empty($name)) {
        $error = true;
        $errors[] = 'Lütfen adınızı girin. Bu alan boş bırakılamaz.';
    }
 
    if (empty($surname)) {
        $error = true;
        $errors[] = 'Lütfen Soyisim girin. Bu alan boş bırakılamaz.';
    }
 
    if (empty($username)) {
        $error = true;
        $errors[] = 'Lütfen bir kullanıcı adı girin. Bu alan boş bırakılamaz.';
    }
 
    
     // Şifreler eşleşiyor mu 
     
    if ($password1 != $password2) {
        $error = true;
        $errors[] = 'Şifreler Eşleşmiyor.';
    }
 
    
     // Şifre 4 karakterden uzun mu ?
    if (strlen($password1) < 4) {
        $error = true;
        $errors[] = 'Şifre en az 5 karakter olmalıdır.';
    }
 
    if (!$error) {
        $name = $db->quote($name);
        $surname = $db->quote($surname);
        $username = $db->quote($username);
        $password = md5($password1);
 
        $sorgu = "INSERT INTO user (name,surname,username,password,created_at,updated_at) VALUES ($name,$surname,$username,'$password',NOW(), NOW());";
 
        $db->query($sorgu);
 
        header("location: login.php?type=success");
        exit;
 
 
    }
}
?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Adrese Teslim Yemek Aboneliği">
        <meta name="author" content="Diet Box" >
        <meta name="keywords" content="Yüksek proteinli ve diyet yemekler">
        <meta name="viewport" content="width=devixe-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Diet Box</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
         
        
    </head>
    
    <body>
        
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.php"><img src="img/LOGO.png"></a>
                    
                </div>
                
                <div class="menu">
                    <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="packages.html">PACKAGES</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="contactus.html">CONTACT US</a></li>
                     </ul>
                        
                </div>
            </div>
        </header>
</head>
<body>


<div class="container">
        <div class="row">
            <div class="col-md-12"><hr></div>
            <div class="col-md-12">
            <div class="registerTop">
                <h3>Kayıt Ol</h3>
                <form method="post" action="register.php" >
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ad</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Adınız" value="<?php echo $name;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Soyad</label>
                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Soyadınız" value="<?php echo $surname;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kullanıcı Adı</label>
                        <input type="email" class="form-control" id="username" name="username" placeholder="E-Posta adresiniz" value="<?php echo $username;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Şifre</label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Şifre" value="<?php echo $password1;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Şifre - Tekrar</label>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Şifre(Tekrar)" value="<?php echo $password2;?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Kayıt İşlemini Tamamla</button>
                </form><hr>
            </div>
                
                <?php
                
                if ($_POST) {
                    
                    if ($error) {
                        
                        $totalError = count($errors);
                        echo '<div class="alert alert-danger" role="alert">' . $totalError . ' Hata bulundu. Lütfen bu hataları giderin ve tekrar deneyin.</div>';
    
                        foreach ($errors as $err) {
                            echo '<div class="alert alert-warning" role="alert">' . $err . '</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
</div>
           
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <!-- Footer Section-->
        
 <footer class="sectionArea">
            <div class="container">
                <div class="col3">
                    <div class="footerItem">
                        <h3>WELCOME TO DIET BOX</h3>
                        <a href="index.html"><img src="img/LOGO.png"></a>
                        <p>Adrese Teslim Yemek Aboneliği</p>
                    </div>
                </div>
                <div class="col3">
                    <div class="footerItem">
                        <h3>QUICK LINKS</h3>
                        <ul class="footerLinks">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="packages.html">PACKAGES</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="contactus.html">CONTACT US</a></li>
                        </ul>
                        
                    </div>
                </div>
                    <div class="col3">
                    <div class="footerItem">
                        <h3>BE SOCIAL WITH US</h3>
                        <ul class="socialLinks">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
                
            </div>
        </footer>
       
</body>
</html>