CREATE DATABASE alojamiento;
USE alojamiento;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);
