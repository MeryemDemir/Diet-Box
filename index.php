<?php


include_once ("./inc/config.php");
 
$db = new Db();
if (!$db->connect()) {
    die("Hata: Veritabanına bağlanırken bir hata oluştu." . $db->error());
}

$user = $_SESSION["login_user"];
 
 
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
                <div class="girisdiv">
                    <ul>
                    <?php
                if ($user) { //kullanıcı giriş yaptıysa 
                    echo '
                    <li class="loginbtn"><a href="packages.html" >MERHABA '.$user["name"].'</a></li>
                    <li class="loginbtn"><a href="logout.php">LOGOUT</a></li>';
                } else {//kullanıcı giriş yapmadıysa
                    echo '
                    <li class="loginbtn"><a href="login.php">LOGIN</a></li>
                    <li class="loginbtn"><a href="register.php">SIGN UP</a></li>';
                }
            ?>
                        
                     </ul>  
                </div>
            </div>
        </header>
        
        <!--  MAIN SECTION -->  
        <section id="mainSlider" claas="slider">
            <div id="mainCaption" class="caption">
                <h1>DIET BOX | EVDE SAĞLIKLI YEMEK PAKETİ</h1>
                <p>Herkese uygun beslenme çözümlerimiz, lezzetli ve sağlıklı yemeklerimizle yanınızdayız!</p>
            </div>
        </section>
        
        <!--  FEATURE SECTION --> 
        
        <section id="features" class="sectionArea">
            <div class="featuresTop">
                <h2 class="sectionHeader">NASIL ÇALIŞIYORUZ ?</h2>
            </div>
            <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                                <img src="img/b%C3%B6lmel%C4%B1k%C4%B1s%C4%B1millkkkkk.jpg">
                            </div>
                            <div class="itemText">
                                <h3>1. Adım</h3>
                                <p>Beslenme uzmanlarımızın desteğiyle, ihtiyacınıza ve hassasiyetlerinize uygun olarak sizin için ideal abonelik programı oluşturulur ve aboneliğiniz 2 iş günü içinde başlar.</p>
                                <a href="about.html" class= "btnDetails">Daha Detaylı İncele</a>
                                
                            </div>
                        
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                                <img src="img/b%C3%B6lmelik%C4%B1s%C4%B1m22.jpg">
                            </div>
                            <div class="itemText">
                                <h3>2. Adım</h3>
                                <p>Günlük 4 ya da 5 öğün (2/3 ana + 2 ara öğün) yemeğiniz, kalori ihtiyacınıza uygun olarak hazırlanır.Yemekleriniz sağlıklı ve kişiye özel kullan-at kaplarda sizin için hazırlanır.</p>
                                <a href="about.html" class= "btnDetails">Daha Detaylı İncele</a>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                                <img src="img/b%C3%B6lmelik%C4%B1s%C4%B1m33.jpg">
                            </div>
                            <div class="itemText">
                                <h3>3. Adım</h3>
                                <p>Her gün belirttiğiniz adrese tercihiniz doğrultusunda sabah 7.00 - 8.30 veya 8.30 - 10.00 saatleri arasında teslim edilir. Dilerseniz sıya dayanıklı kaplardaki öğünlerini ısıtabilirsiniz.</p>
                                <a href="about.html" class= "btnDetails">Daha Detaylı İncele</a>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--  PARALLAX SECTION --> 
        
        <section id="parallax" class="sectionArea">
            <div class="parallaxTop">
                <h2 class="sectionHeader">KENDİNİZE EN UYGUN DİYETİ BULUN!</h2>
            </div>
        </section>
          
        
        
        <!--  ENGİNE SECTION --> 
        <section id="engine" class="sectionArea">
          
            <div class="engineBody">
                <div class="container">
                    <div class="col2">
                        <div class="engineContainer">
                            <img src="img/paketleridetayl%C4%B1%C4%B1nceleme.jpg" class="imageOver">
                            <div class="engineOverlay">
                                <div class="engineText">
                                    <a href="packages.html" class= "btnDetails2">Paketleri Detaylıca İncelemek İçin Tıkla!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="engineContainer">
                            <img src="img/soruişareti2.jpg" class="imageOver">
                            <div class="engineOverlay2">
                                <div class="engineText">
                                    <a href="about.html" class= "btnDetails2">Neden Diet Box ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
        <!--  PROJECTX SECTION --> 
        
        <section id="projectX" class="sectionArea">
            <div class="projectXTop">
                <h3>Dıet Box Kullanmanın Avantajları</h3>
            </div>
            <div class="projectXBody">
                <div class="container">
                    <div class="col6">
                        <div class="projectXImage">
                            <img src="img/PROJECT1.png">
                            <div class="projectXText">
                                <p>Protein menüleri, fit ve form menüleri ile ihtiyacınıza uygun 1200-1500-2000-2500 kalori aralığında paketler sunuyor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="projectXImage">
                            <img src="img/PROJECT2.png">
                            <div class="projectXText">
                                <p>Dengeli hazırlanmış 3 ana 2 ara öğün içerir. Bütün bir gün ne yiyeceğinizi düşünmessiniz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="projectXImage">
                            <img src="img/PROJECT3.png">
                            <div class="projectXText">
                                <p>Yoğun iş ve spor temponuzda adresinize günlük teslimat ile zaman kazanmanızı sağlar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="projectXImage">
                            <img src="img/PROJECT4.png">
                            <div class="projectXText">
                                <p>Spor yapan kişilere özel nitrojen dengenizi sağlayacak şekilde hazırlanmıştır. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="projectXImage">
                            <img src="img/PROJECT5.png">
                            <div class="projectXText">
                                <p>Protein içeriği sayesinde yeni kas dokusu oluşturmanızı ve hasar gören kasların onarımını sağlar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="projectXImage">
                            <img src="img/PROJECT6.png">
                            <div class="projectXText">
                                <p>Gereken günlük enerjiyi almanıza ve gün boyu zinde kalmanıza destek olur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
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