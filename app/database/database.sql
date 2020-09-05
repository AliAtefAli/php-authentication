
-- create the database
CREATE DATABASE php_authentication;
-- create the user table
CREATE TABLE users ( `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(50),
`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP);
