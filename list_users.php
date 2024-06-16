<?php
// list_users.php

$servername = "localhost";
$username = "username"; // MySQL kullanıcı adınızı girin
$password = "password"; // MySQL şifrenizi girin
$dbname = "kullanici_veritabani";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, name, surname, email, birthDate, gender FROM kullanicilar";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) > 0) {
        echo "<h2>Kayıtlı Kullanıcılar</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>İsim</th>
                    <th>Soyisim</th>
                    <th>E-posta</th>
                    <th>Doğum Tarihi</th>
                    <th>Cinsiyet</th>
                </tr>";

        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['name'] . "</td>";
            echo "<td>" . $user['surname'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "<td>" . $user['birthDate'] . "</td>";
