<?php
include_once ("./inc/config.php");
 
$db = new Db();
 

if (!$db->connect()) {
    die("Hata: Veritabanına bağlanırken bir hata oluştu." . $db->error());
}
 

$user = $_SESSION["login_user"];
 
if ($user) {
    header("location: index.php");
    exit;
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
        
        <title>Diet Box</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
     <style>   
            .limiter {
             
                width: 600px;
                height: 600px;
                margin-left: 60px;
    
            }
            body {
                font-family: Arial;
                font-size: 17px;
                padding: 8px;
            }
            * {
                box-sizing: border-box;
            }
            
            
            
            .container-login100 {
                background-color: #fff;
                margin-top: 100px;
                border: none;
                border-radius: 3px;
            }
          
            
           
            .login100-form-btn {
                background-color: #4CAF50;
                color: white;
                padding: 12px;
                
                margin-left: 241px;
                border: none;
                width: 40%;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;
            }
            
            .txt3 {
                color: gray;
                margin-top: 200px;
                padding: 12px;
                
                margin-left: 240px;
                border: none;
                width: 300px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;

            }
            .a {
                color: #2196F3;
                
            }
            .input100 {
                
                color: white;
                padding: 12px;
                margin-top:0px;
                margin-left: 240px;
                border: none;
                width: 250px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;
            }
            
            label {
                
                padding: 12px;
                margin-top:20px;
                margin-left: 240px;
                border: none;
                width: 300px;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;
                
            }     
            .ckb1 {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                                
            }      
        
        }

     </style>   
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
 
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    <?php
                    if ($_GET["type"] == 'success') {
                        echo '<div class="alert alert-success" role="alert"> Tebrikler! Başarıyla kayıt oldunuz. Artık oturum açabilirsiniz.</div>';
                    }
        
                    if ($_GET["type"] == 'error') {
                        echo '<div class="alert alert-danger" role="alert"> Geçersiz Kullanıcı Adı/Şifre</div>';
                    }
                    ?>
                    <form class="login100-form validate-form flex-sb flex-w" method="post" action="login_check.php">
                        
                        
                        <div class="wrap-input100 validate-input m-b-36" data-validate="Kullanıcı Adı zorunludur.">
                            <label for="username">E-mail</label>
                            <input class="input100" type="text" name="username" id="username" placeholder="E-posta adresiniz.">
                            <span class="focus-input100"></span>
                        </div>
                        <label for="password" >Password</label>
                        <div class="wrap-input100 validate-input m-b-12" data-validate="Şifre zorunludur. Boş bırakılamaz.">
                            
                            <input class="input100" type="password" name="password" id="password" placeholder="Şifreniz.">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="flex-sb-m w-full p-b-48">
                            
                            <div>
                                <a href="#" class="txt3">Şifremi Unuttum <i class="fa fa-frown-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="assets/vendor/animsition/js/animsition.min.js"></script>
        <script src="assets/vendor/bootstrap/js/popper.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/vendor/select2/select2.min.js"></script>
        <script src="assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
        <script src="assets/vendor/countdowntime/countdowntime.js"></script>
        <script src="assets/js/main.js"></script>


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