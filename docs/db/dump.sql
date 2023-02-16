CREATE DATABASE desafio_rene DEFAULT CHARACTER SET utf8mb4;

CREATE TABLE categoria(
    id INT PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(100) NOT NULL,
    categoria VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE produto
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(150) NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    sku VARCHAR(100) NULL,
    quantidade INT NOT NULL,
    descricao TEXT NULL,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*CREATE TABLE usuario
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(30) NOT NULL,
    senha VARCHAR(15) NOT NULL,
    perfil CHAR(1)  DEFAULT 'U' NOT NULL
);*/


