<!DOCTYPE html>
<html>
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
  body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }
  * {
    box-sizing: border-box;
  }
  .row {
    display: -ms-flexbox; 
    display: flex;
    -ms-flex-wrap: wrap; 
    flex-wrap: wrap;
    margin: 0 -16px;
    margin-left: 150px;
    
  }
  .col-25 {
    -ms-flex: 25%;
    flex: 25%;
  }
  .col-50 {
    -ms-flex: 50%; 
    flex: 50%;
  }
  .col-75 {
    -ms-flex: 75%; 
    flex: 75%;
  }
  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }
  .container {
    background-color: #fff;
    padding: 5px 20px 15px 20px;
    border: none;
    border-radius: 3px;
  }
  .containerr {
    background-color: #500d16;
    display: flex;
    
  }
  
  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  label {
    margin-bottom: 10px;
    display: block;
  }
  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }
  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    margin-left: 240px;
    border: none;
    width: 70%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }
  .btn:hover {
    background-color: #45a049;
  }
  a {
    color: #2196F3;
  }
  hr {
    border: 1px solid lightgrey;
  }
  span.price {
    float: right;
    color: grey;
  }
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
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
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="index.php">     
        <div class="row">
          <div class="col-50">
            <h3>Fatura Adresi</h3>
            <label for="fname"><i class="fa fa-user"></i> Kullanıcı Adı</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> Şehir</label>
            <input type="text" id="city" name="city" >
            <div class="row">
              <div class="col-50">
                <label for="state">İlçe</label>
                <input type="text" id="state" name="state" >
              </div>
              <div class="col-50">
                <label for="zip">Posta Kodu</label>
                <input type="text" id="zip" name="zip" >
              </div>
            </div>
          </div>
          <div class="col-50">
            <h3>Ödeme</h3>
            <label for="fname">Tüm Banka Kartlarıyla Anlaşmamız Vardır</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Kart Sahibinin Adı-Soyadı</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Kredi Kartı Numarası</label>
            <input type="text" id="ccnum" name="cardnumber">
            <label for="expmonth">SKT</label>
            <input type="text" id="expmonth" name="expmonth" >
            <div class="row">
            
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>         
        </div>
        <input type="submit" value="Ödemeyi Yap" class="btn btn-primary" onclick="OdemeAlert()">
      </form>
    </div>
  </div>
</div>
<script>
  
//Kullanıcı Ödemeyi kabul ettiğinde alert gelerek mesaj vermesini sağladık -> onClick ()
function OdemeAlert() {
  alert("Ödemeniz Başarıyla Gerçekleşti. En Kısa Zamanda Paketinizi Ulaştıracağız.");
}
</script>
<footer class="sectionArea">
            <div class="containerr">
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