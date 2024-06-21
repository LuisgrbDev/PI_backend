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
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria) ON DELETE SET NULL ON UPDATE CASCADE);


SELECT * FROM categoria;
SELECT * FROM eventos;

-- Inserts para a tabela 'usuario'
INSERT INTO usuario (nome, email, senha) VALUES 
('João Silva', 'joao@example.com', 'senha123'),
('Maria Santos', 'maria@example.com', 'abc123'),
('Pedro Oliveira', 'pedro@example.com', 'senha456');

-- Inserts para a tabela 'evento'
INSERT INTO evento (nomeEvento, data_evento, horaInicio, horaFim, descricao) VALUES 
('Festa de Aniversário', '2024-06-20', '20:00:00', '04:00:00', 'Venha comemorar conosco!'),
('Baile de Verão', '2024-07-15', '21:30:00', '03:00:00', 'Música, dança e diversão.'),
('Concerto de Jazz', '2024-08-10', '19:00:00', '22:00:00', 'Uma noite de boa música.');

-- Inserts para a tabela 'categoria'
INSERT INTO categoria (nomeCategoria, descricao) VALUES 
('Social', 'Eventos sociais e festas em geral.'),
('Cultural', 'Eventos que envolvem arte, música, teatro, etc.'),
('Profissional', 'Eventos voltados para networking e desenvolvimento profissional.');

-- Inserts para a tabela 'convidados'
INSERT INTO convidados (nomeConvidado, email, telefone, cpf, dataNascimento) VALUES 
('Ana Oliveira', 'ana@example.com', '999999999', '12345678901', '1990-05-15'),
('Carlos Lima', 'carlos@example.com', '888888888', '23456789012', '1985-10-20'),
('Patrícia Souza', 'patricia@example.com', '777777777', '34567890123', '1998-03-25');

-- Inserts para a tabela 'eventos'
INSERT INTO eventos (id_convidado, id_evento, id_categoria) VALUES 
(1, 1, 1),
(2, 2, 1),
(3, 3, 2);