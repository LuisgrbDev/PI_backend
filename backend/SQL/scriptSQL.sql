CREATE DATABASE IF NOT EXISTS sistema_balada;
USE sistema_balada;


CREATE TABLE IF NOT EXISTS usuario (
	id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(15) NOT NULL
);

CREATE TABLE IF NOT EXISTS evento (
	id_evento INT AUTO_INCREMENT PRIMARY KEY,
    nomeEvento VARCHAR(50) NOT NULL,
    data_evento DATE,
    horaInicio TIME,
    horaFim TIME,
    descricao VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS categoria (
	id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nomeCategoria VARCHAR(25) NOT NULL,
    descricao VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS convidados (
	id_convidado INT AUTO_INCREMENT PRIMARY KEY,
    nomeConvidado VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    cpf VARCHAR(11),
    dataNascimento DATE
);

CREATE TABLE IF NOT EXISTS eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_convidado INT,
    id_evento INT,
    id_categoria INT,
    FOREIGN KEY (id_convidado) REFERENCES convidados(id_convidado),
    FOREIGN KEY (id_evento) REFERENCES evento(id_evento),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);