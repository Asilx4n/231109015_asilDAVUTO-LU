<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "username"; // MySQL kullanıcı adınızı girin
$password = "password"; // MySQL şifrenizi girin
$dbname = "kullanici_veritabani";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Form verilerini veritabanına ekleme
    $sql = "INSERT INTO kullanicilar (name, surname, email, password, birthDate, gender)
            VALUES (:name, :surname, :email, :password, :birthDate, :gender)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $passwordHash); // Şifre hashleme gerekebilir
    $stmt->bindParam(':birthDate', $birthDate);
    $stmt->bindParam(':gender', $gender);

    // Şifreyi hashleme örneği
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $stmt->execute();

    // Başarılı bir şekilde eklendiğini bildirme
    echo "Kullanıcı başarıyla veritabanına eklendi.";

} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}

$conn = null;
?>
