CREATE DATABASE auth_grieznis;
USE auth_grieznis;
SELECT * FROM users;

 CREATE TABLE users(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL 
);


 INSERT INTO users
(email, password)
VALUES
("beate@ckc.lv", "Parole123");
