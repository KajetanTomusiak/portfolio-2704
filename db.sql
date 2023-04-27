CREATE DATABASE portfolio;
USE portfolio;

CREATE TABLE projects (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    image VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL
);

INSERT INTO `realizacje` (`id`, `tytul`, `opis`, `obrazek`) 
VALUES (NULL, 'Realizacja nr 1', 'Przykładowy opis realizacji nr 1', 'img/release1.png');

INSERT INTO `realizacje` (`id`, `tytul`, `opis`, `obrazek`) 
VALUES (NULL, 'Realizacja nr 2', 'Przykładowy opis realizacji nr 2', 'img/release2.png');

INSERT INTO `realizacje` (`id`, `tytul`, `opis`, `obrazek`) 
VALUES (NULL, 'Realizacja nr 3', 'Przykładowy opis realizacji nr 3', 'img/release3.png');