<?php

 
include_once ("./inc/config.php");
 
$db = new Db();

 // Veritabanına bağlanmaya çalışıyoruz
 
if (!$db->connect()) {
    die("Hata: Veritabanına bağlanırken bir hata oluştu." . $db->error());
}
 
// login_user oturum değişkeninden bilgileri al ve $user değişkenine kaydediyoruz.
 
$user = $_SESSION["login_user"];
 
// Kullanıcı zaten oturum açmış ise index.php ye gider

if ($user) {
    header("location: index.php");
    exit;
}
 
 
// login.php den gönderilen Kullanıcı adı ve Şifreyi al
$username = $_POST["username"];
$password = $_POST["password"];
 
$username = trim($username);
$password = trim($password);
$username = $db->quote($username);
$password = md5($password);
$query= "SELECT * FROM user WHERE username=$username and password='$password'";
$result = $db->select($query);
 
//IF ile EŞLEŞEN bir kayıt var mı diye kontrol ediyoruz.
 
if ($result && count($result) == 1) {
    
    $_SESSION["login_user"] = array(
        "id" => $result[0]["id"],
        "name" => $result[0]["name"],
        "surname" => $result[0]["surname"],
        "username" => $result[0]["username"],
        "created_at" => $result[0]["created_at"],
        "updated_at" => $result[0]["updated_at"]
    );
 
    header("location: index.php");
    exit;
 
} else {
   
    header("location: login.php?type=error");
    exit;
 
}