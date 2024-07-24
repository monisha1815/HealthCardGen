CREATE DATABASE medical_card_system;

USE medical_card_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    medical_conditions TEXT,
    card_number VARCHAR(20) UNIQUE NOT NULL
);
