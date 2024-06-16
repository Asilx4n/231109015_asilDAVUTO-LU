CREATE DATABASE IF NOT EXISTS kullanici_veritabani;

USE kullanici_veritabani;

CREATE TABLE IF NOT EXISTS kullanicilar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    birthDate DATE NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL
);
