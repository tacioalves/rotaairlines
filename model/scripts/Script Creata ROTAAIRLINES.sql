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
  cpf BIGINT NOT NULL UNIQUE,
  senha VARCHAR(100) NOT NULL
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
  assentosDisponiveis INT
);

-- Criação da tabela tabelaReserva
CREATE TABLE tabelaReserva (
  idReserva INT AUTO_INCREMENT PRIMARY KEY,
  codReserva CHAR(6),
  idVoo INT,
  idUsuario INT,
  assentoReservado INT,
  FOREIGN KEY (idVoo) REFERENCES tabelaVoos(idVoo),
  FOREIGN KEY (idUsuario) REFERENCES tabelaUsuario(idUsuario)
);


-- Insere 10 Voos Iniciais

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'São Paulo', 'Rio de Janeiro', '2023-06-01 10:00:00', 1234, 'Boeing 737', 250.00, '2023-06-01 11:30:00', 'imagem1.jpg', 150);


INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'Nova York', 'Londres', '2023-06-05 15:30:00', 5678, 'Airbus A380', 1500.00, '2023-06-05 18:45:00', 'imagem2.jpg', 80);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'São Paulo', 'Brasília', '2023-06-02 08:00:00', 2468, 'Airbus A320', 180.00, '2023-06-02 10:00:00', 'imagem3.jpg', 200);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'Paris', 'Roma', '2023-06-03 14:30:00', 1357, 'Boeing 777', 1200.00, '2023-06-03 17:45:00', 'imagem4.jpg', 100);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'Nova York', 'Los Angeles', '2023-06-04 12:00:00', 3698, 'Airbus A330', 350.00, '2023-06-04 15:30:00', 'imagem5.jpg', 150);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'Tóquio', 'Sydney', '2023-06-06 16:15:00', 8024, 'Boeing 787', 2500.00, '2023-06-06 23:30:00', 'imagem6.jpg', 80);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'Lisboa', 'Madrid', '2023-06-07 10:30:00', 4875, 'Airbus A350', 400.00, '2023-06-07 12:45:00', 'imagem7.jpg', 200);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'Moscou', 'Pequim', '2023-06-08 13:45:00', 6239, 'Boeing 747', 1800.00, '2023-06-08 21:30:00', 'imagem8.jpg', 100);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'São Francisco', 'Chicago', '2023-06-09 09:30:00', 9523, 'Airbus A380', 350.00, '2023-06-09 12:15:00', 'imagem9.jpg', 150);

INSERT INTO tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis)
VALUES ('Econômica', 'Londres', 'Dubai', '2023-06-10 17:00:00', 7012, 'Boeing 767', 2000.00, '2023-06-10 23:45:00', 'imagem10.jpg', 80);
