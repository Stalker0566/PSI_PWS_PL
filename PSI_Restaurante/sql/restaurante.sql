CREATE DATABASE IF NOT EXISTS restaurante;
USE restaurante;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255),
    tipo ENUM('admin', 'funcionario') DEFAULT 'funcionario'
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    preco DECIMAL(6,2),
    categoria VARCHAR(50),
    stock INT
);

CREATE TABLE mesas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero INT,
    capacidade INT,
    estado ENUM('livre', 'ocupada') DEFAULT 'livre'
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_mesa INT,
    id_user INT,
    data DATETIME,
    status ENUM('em preparação', 'servido', 'pago') DEFAULT 'em preparação',
    FOREIGN KEY (id_mesa) REFERENCES mesas(id),
    FOREIGN KEY (id_user) REFERENCES users(id)
);

CREATE TABLE pedido_produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido INT,
    id_produto INT,
    quantidade INT,
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id),
    FOREIGN KEY (id_produto) REFERENCES produtos(id)
);
