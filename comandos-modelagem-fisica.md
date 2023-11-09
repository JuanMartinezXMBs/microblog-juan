# Comando SQL para Modelagem Física

## Criar banco de dados

CREATE DATABASE microblog_juan CHARACTER SET utf8mb4

## Criar tabela de usuario

CREATE TABLE usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL ,
    tipo ENUM('admin','editor') NOT NULL
); 

# Faça o comando SQL para criação da tabela de notícias com todas as colunas: id, data, titulo, texto, resumo, imagem e usuario_id

CREATE TABLE usuarios(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    titulo VARCHAR(150) NOT NULL,
    texto TEXT NOT NULL,
    resumo TINYTEXT NOT NULL,
    imagem VARCHAR(45) NOT NULL,
    usuario_id INT NOT NULL
); 