<?php
// submit.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthDate = $_POST['birthDate'];
    $gender = $_POST['gender'];

    // E-posta benzersiz kontrolü (örnek amaçlı)
    // Bu kısmı projenizin gereksinimlerine göre değiştirebilirsiniz.
    // Örneğin, veritabanından sorgu yaparak varolan e-posta kontrolü yapabilirsiniz.

    // Veritabanı bağlantısı ve ekleme işlemi (aşağıda anlatılacak)

    // Başarılı bir şekilde kaydedildiğini bildirme
    echo "Kullanıcı başarıyla kaydedildi.";
}
?>
