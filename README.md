﻿# andikacrud

# cara menjalankannya

buatlah project dalam xampp
create database crud_db

USE crud_db;

sesudah membuat databasenya lalu kita buat table

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

lalu selesai

