-- Criação do banco de dados ROTA
CREATE DATABASE ROTAAIRLINES;

-- Utilização do banco de dados ROTA
USE ROTAAIRLINES;

-- Criação da tabela tabelaUsuario
CREATE TABLE tabelaUsuario (
  idUsuario INT AUTO_INCREMENT PRIMARY KEY,
  nomeUsuario VARCHAR(200) NOT NULL,
  email VARCHAR(40) NOT NULL,
  dtaNasc DATE NOT NULL,
  paisNasc VARCHAR(20) NOT NULL,
  numTel BIGINT NOT NULL,
  cpf char(11) NOT NULL UNIQUE,
  senha VARCHAR(100) NOT NULL,
  sexo char(1) 
);

-- Criação da tabela tabelaReclamacao
CREATE TABLE tabelaReclamacao (
  idReclamacao INT AUTO_INCREMENT PRIMARY KEY,
  idUsuarioReclamacao INT,
  codReserva CHAR(6),
  descricaoReclamacao VARCHAR(300),
  FOREIGN KEY (idUsuarioReclamacao) REFERENCES tabelaUsuario(idUsuario)
);

-- Criação da tabela tabelaVoos
CREATE TABLE tabelaVoos (
  idVoo INT AUTO_INCREMENT PRIMARY KEY,
  classeVoo VARCHAR(10),
  origemVOO VARCHAR(50),
  destinoVOO VARCHAR(50),
  dataHoraPartida DATETIME,
  numVoo INT,
  modeloAeronave VARCHAR(15),
  valorVoo DECIMAL(10, 2),
  dataHoraChegada DATETIME,
  imagemVoo VARCHAR(500),
  assentosDisponiveis INT,
  qtdPassagens INT,
  duracao TIME,
  codReserva varchar(6)
);

-- Criação da tabela tabelaReserva
CREATE TABLE tabelaReserva (
  idReserva INT AUTO_INCREMENT PRIMARY KEY,
  codReservaVoo VARCHAR(6),
  idVoo INT,
  idUsuario INT,
  assentoReservado INT,
  validaCheckin INT,
  FOREIGN KEY (idVoo) REFERENCES tabelaVoos(idVoo),
  FOREIGN KEY (idUsuario) REFERENCES tabelaUsuario(idUsuario)
);


-- Insere 10 Voos Iniciais

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES
    ('Econômica', 'São Paulo', 'Rio de Janeiro', '2023-06-10 08:00:00', 12345, 'Boeing 737', 200.00, '2023-06-10 09:30:00', 'imagem1.jpg', 150, 0, '02:30:00', 'ABC123'),
    ('Executiva', 'São Paulo', 'Belo Horizonte', '2023-06-11 10:30:00', 67890, 'Airbus A320', 350.00, '2023-06-11 12:00:00', 'imagem2.jpg', 100, 0, '01:30:00', 'DEF456'),
    ('Econômica', 'São Paulo', 'Salvador', '2023-06-12 13:45:00', 54321, 'Boeing 747', 400.00, '2023-06-12 16:15:00', 'imagem3.jpg', 200, 0, '02:30:00', 'GHI789'),
    ('Executiva', 'São Paulo', 'Recife', '2023-06-13 17:30:00', 98765, 'Airbus A380', 500.00, '2023-06-13 20:00:00', 'imagem4.jpg', 50, 0, '02:30:00', 'JKL012'),
    ('Econômica', 'São Paulo', 'Curitiba', '2023-06-14 09:15:00', 24680, 'Embraer E190', 150.00, '2023-06-14 10:45:00', 'imagem5.jpg', 80, 0, '01:30:00', 'MNO345'),
    ('Econômica', 'Rio de Janeiro', 'São Paulo', '2023-06-20 08:00:00', 12345, 'Boeing 737', 200.00, '2023-06-20 09:30:00', 'imagem1.jpg', 150, 0, '02:30:00', 'A5GF68'),
    ('Executiva', 'Belo Horizonte', 'São Paulo', '2023-06-21 10:30:00', 67890, 'Airbus A320', 350.00, '2023-06-21 12:00:00', 'imagem2.jpg', 100, 0, '01:30:00', 'AH25F6'),
    ('Econômica', 'Salvador', 'São Paulo', '2023-06-22 13:45:00', 54321, 'Boeing 747', 400.00, '2023-06-22 16:15:00', 'imagem3.jpg', 200, 0, '02:30:00', 'LO2UNA'),
    ('Executiva', 'Recife', 'São Paulo', '2023-06-23 17:30:00', 98765, 'Airbus A380', 500.00, '2023-06-23 20:00:00', 'imagem4.jpg', 50, 0, '02:30:00', 'J8225A'),
    ('Econômica', 'Curitiba', 'São Paulo', '2023-06-24 09:15:00', 24680, 'Embraer E190', 150.00, '2023-06-24 10:45:00', 'imagem5.jpg', 80, 0, '01:30:00', 'BLXS25');
