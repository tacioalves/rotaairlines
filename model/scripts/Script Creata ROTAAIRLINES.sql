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
  codReserva CHAR(20),
  descricaoReclamacao VARCHAR(300),
  statusReclamacao VARCHAR(50),
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
  codReserva varchar(20)
);

-- Criação da tabela tabelaReserva
CREATE TABLE tabelaReserva (
  idReserva INT AUTO_INCREMENT PRIMARY KEY,
  codReservaVoo VARCHAR(20),
  idVoo INT,
  idUsuario INT,
  assentoReservado INT,
  validaCheckin INT,
  statusReserva VARCHAR(20),
  FOREIGN KEY (idVoo) REFERENCES tabelaVoos(idVoo),
  FOREIGN KEY (idUsuario) REFERENCES tabelaUsuario(idUsuario)
);


-- Insere 10 Voos Iniciais

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Brasília', '2023-06-12 10:00:00', 11111, 'Airbus A320', 180.00, '2023-06-12 12:30:00', 'view/src/brasilia.jpg', 150, 0, '02:30:00', 'ABC123');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Rio de Janeiro', '2023-06-12 14:00:00', 22222, 'Boeing 737', 220.00, '2023-06-12 16:30:00', 'view/src/riodejaneiro.jpg', 150, 0, '02:30:00', 'ABC124');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'São Paulo', '2023-06-12 18:00:00', 33333, 'Embraer E190', 190.00, '2023-06-12 20:30:00', 'view/src/saopaulo.jpg', 150, 0, '02:30:00', 'ABC125');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Vitória', '2023-06-12 22:00:00', 44444, 'Embraer E195', 200.00, '2023-06-13 00:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC126');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Fortaleza', '2023-06-13 02:00:00', 55555, 'Airbus A321', 230.00, '2023-06-13 04:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC127');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'São Paulo', '2023-06-12 10:00:00', 11111, 'Airbus A320', 180.00, '2023-06-12 12:30:00', 'view/src/saopaulo.jpg', 150, 0, '02:30:00', 'ABC128');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Vitória', '2023-06-12 14:00:00', 22222, 'Boeing 737', 220.00, '2023-06-12 16:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC129');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Brasília', '2023-06-12 18:00:00', 33333, 'Embraer E190', 190.00, '2023-06-12 20:30:00', 'view/src/brasilia.jpg', 150, 0, '02:30:00', 'ABC1210');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Fortaleza', '2023-06-12 22:00:00', 44444, 'Embraer E195', 200.00, '2023-06-13 00:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC12311');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Salvador', '2023-06-13 02:00:00', 55555, 'Airbus A321', 230.00, '2023-06-13 04:30:00', 'view/src/salvador.jpg', 150, 0, '02:30:00', 'ABC12312');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Vitória', '2023-06-12 10:00:00', 11111, 'Airbus A320', 180.00, '2023-06-12 12:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC12313');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Rio de Janeiro', '2023-06-12 14:00:00', 22222, 'Boeing 737', 220.00, '2023-06-12 16:30:00', 'view/src/riodejaneiro.jpg', 150, 0, '02:30:00', 'ABC12314');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Brasília', '2023-06-12 18:00:00', 33333, 'Embraer E190', 190.00, '2023-06-12 20:30:00', 'view/src/brasilia.jpg', 150, 0, '02:30:00', 'ABC12315');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Fortaleza', '2023-06-12 22:00:00', 44444, 'Embraer E195', 200.00, '2023-06-13 00:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC12316');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Salvador', '2023-06-13 02:00:00', 55555, 'Airbus A321', 230.00, '2023-06-13 04:30:00', 'view/src/salvador.jpg', 150, 0, '02:30:00', 'ABC12317');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Vitória', '2023-06-12 10:00:00', 11111, 'Airbus A320', 180.00, '2023-06-12 12:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC12318');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Rio de Janeiro', '2023-06-12 14:00:00', 22222, 'Boeing 737', 220.00, '2023-06-12 16:30:00', 'view/src/riodejaneiro.jpg', 150, 0, '02:30:00', 'ABC12319');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'São Paulo', '2023-06-12 18:00:00', 33333, 'Embraer E190', 190.00, '2023-06-12 20:30:00', 'view/src/saopaulo.jpg', 150, 0, '02:30:00', 'ABC12320');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Fortaleza', '2023-06-12 22:00:00', 44444, 'Embraer E195', 200.00, '2023-06-13 00:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC12321');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Salvador', '2023-06-13 02:00:00', 55555, 'Airbus A321', 230.00, '2023-06-13 04:30:00', 'view/src/salvador.jpg', 150, 0, '02:30:00', 'ABC12322');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Brasília', '2023-06-13 08:00:00', 11111, 'Airbus A320', 180.00, '2023-06-13 10:30:00', 'view/src/brasilia.jpg', 150, 0, '02:30:00', 'ABC12990');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Rio de Janeiro', '2023-06-13 11:00:00', 22222, 'Boeing 737', 220.00, '2023-06-13 13:30:00', 'view/src/riodejaneiro.jpg', 150, 0, '02:30:00', 'ABC13091');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'São Paulo', '2023-06-13 14:00:00', 33333, 'Embraer E190', 190.00, '2023-06-13 16:30:00', 'view/src/saopaulo.jpg', 150, 0, '02:30:00', 'ABC13192');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Vitória', '2023-06-13 17:00:00', 44444, 'Embraer E195', 200.00, '2023-06-13 19:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC13293');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Salvador', 'Fortaleza', '2023-06-13 20:00:00', 55555, 'Airbus A320', 180.00, '2023-06-13 22:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC13394');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'São Paulo', '2023-06-13 08:00:00', 66666, 'Boeing 737', 200.00, '2023-06-13 10:30:00', 'view/src/saopaulo.jpg', 150, 0, '02:30:00', 'ABC13495');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Vitória', '2023-06-13 11:00:00', 77777, 'Embraer E195', 180.00, '2023-06-13 13:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC13596');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Brasília', '2023-06-13 14:00:00', 88888, 'Airbus A320', 220.00, '2023-06-13 16:30:00', 'view/src/brasilia.jpg', 150, 0, '02:30:00', 'ABC13697');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Fortaleza', '2023-06-13 17:00:00', 99999, 'Boeing 737', 200.00, '2023-06-13 19:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC13798');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Rio de Janeiro', 'Salvador', '2023-06-13 20:00:00', 101010, 'Embraer E190', 190.00, '2023-06-13 22:30:00', 'view/src/salvador.jpg', 150, 0, '02:30:00', 'ABC13899');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Vitória', '2023-06-13 08:00:00', 111111, 'Embraer E195', 180.00, '2023-06-13 10:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC139100');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Rio de Janeiro', '2023-06-13 11:00:00', 121212, 'Boeing 737', 200.00, '2023-06-13 13:30:00', 'view/src/riodejaneiro.jpg', 150, 0, '02:30:00', 'ABC140101');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Brasília', '2023-06-13 14:00:00', 131313, 'Airbus A320', 220.00, '2023-06-13 16:30:00', 'view/src/brasilia.jpg', 150, 0, '02:30:00', 'ABC141102');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Fortaleza', '2023-06-13 17:00:00', 141414, 'Boeing 737', 200.00, '2023-06-13 19:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC142103');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'São Paulo', 'Salvador', '2023-06-13 20:00:00', 151515, 'Embraer E190', 190.00, '2023-06-13 22:30:00', 'view/src/salvador.jpg', 150, 0, '02:30:00', 'ABC143104');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Vitória', '2023-06-13 08:00:00', 161616, 'Embraer E195', 180.00, '2023-06-13 10:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC144105');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Rio de Janeiro', '2023-06-13 11:00:00', 171717, 'Boeing 737', 200.00, '2023-06-13 13:30:00', 'view/src/riodejaneiro.jpg', 150, 0, '02:30:00', 'ABC145106');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'São Paulo', '2023-06-13 14:00:00', 181818, 'Airbus A320', 220.00, '2023-06-13 16:30:00', 'view/src/saopaulo.jpg', 150, 0, '02:30:00', 'ABC146107');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Fortaleza', '2023-06-13 17:00:00', 191919, 'Boeing 737', 200.00, '2023-06-13 19:30:00', 'view/src/fortaleza.jpg', 150, 0, '02:30:00', 'ABC147108');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Brasília', 'Salvador', '2023-06-13 20:00:00', 202020, 'Embraer E190', 190.00, '2023-06-13 22:30:00', 'view/src/salvador.jpg', 150, 0, '02:30:00', 'ABC148109');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Fortaleza', 'Vitória', '2023-06-13 08:00:00', 212121, 'Embraer E195', 180.00, '2023-06-13 10:30:00', 'view/src/vitoria.jpg', 150, 0, '02:30:00', 'ABC149105');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Fortaleza', 'Rio de Janeiro', '2023-06-13 11:00:00', 222222, 'Boeing 737', 200.00, '2023-06-13 13:30:00', 'view/src/riodejaneiro.jpg', 150, 0, '02:30:00', 'ABC150106');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Fortaleza', 'São Paulo', '2023-06-13 14:00:00', 232323, 'Airbus A320', 220.00, '2023-06-13 16:30:00', 'view/src/saopaulo.jpg', 150, 0, '02:30:00', 'ABC151107');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Fortaleza', 'Brasília', '2023-06-13 17:00:00', 242424, 'Boeing 737', 200.00, '2023-06-13 19:30:00', 'view/src/brasilia.jpg', 150, 0, '02:30:00', 'ABC152108');

INSERT INTO rotaairlines.tabelaVoos (classeVoo, origemVOO, destinoVOO, dataHoraPartida, numVoo, modeloAeronave, valorVoo, dataHoraChegada, imagemVoo, assentosDisponiveis, qtdPassagens, duracao, codReserva)
VALUES ('Econômica', 'Fortaleza', 'Salvador', '2023-06-13 20:00:00', 252525, 'Embraer E190', 190.00, '2023-06-13 22:30:00', 'view/src/salvador.jpg', 150, 0, '02:30:00', 'ABC153109');




