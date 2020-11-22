CREATE DATABASE dbClinicaVeterinaria;

USE dbClinicaVeterinaria;

CREATE TABLE tb_funcionario (
	id  		INT AUTO_INCREMENT PRIMARY KEY,
    nome 		VARCHAR(100) NULL,
    cpf 		BIGINT NULL,
    cep 		BIGINT NULL,
    endereco 	VARCHAR(100) NULL,
    complemento	VARCHAR(50) NULL,
    email 		VARCHAR(100) NULL,
    senha		VARCHAR(100) NULL,
    tipo_user		INT NULL
);

CREATE TABLE tb_cliente (
	id 			INT  AUTO_INCREMENT PRIMARY KEY,
    nome 		VARCHAR(100) NULL,
    cpf 		BIGINT NULL,
    endereco 	VARCHAR(100) NULL,
    cep 		BIGINT NULL,
    complemento	VARCHAR(50) NULL,
    email 		VARCHAR(100) NULL,
    senha		VARCHAR(100) NULL,
    tipo_user 		INT NULL
);

CREATE TABLE tb_agendamento (
	id 	INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NULL,
    dia VARCHAR(15) NULL,
    horario VARCHAR(10) NULL,
    tipo_servico VARCHAR(30) NULL,
    descricao VARCHAR(5000) NULL
);



