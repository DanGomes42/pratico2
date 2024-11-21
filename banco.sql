create database pratica2_dani;
use pratica2_dani;

create table cliente(
id_cliente INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200) NOT NULL,
CPF VARCHAR(11) NOT NULL,
email VARCHAR(200) NOT NULL,
telefone VARCHAR(13) NOT NULL
);

create table funcionário(
id_funcionário INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200) NOT NULL,
CPF VARCHAR(11) NOT NULL,
email VARCHAR(200) NOT NULL,
telefone VARCHAR(13) NOT NULL 
);

create table chamado(
id_chamado INT PRIMARY KEY AUTO_INCREMENT,
id_cliente INT NOT NULL,
descricao_problema TEXT NOT NULL,
urgência ENUM('baixa', 'média', 'alta'),
status ENUM('pendente', 'em andamento', 'finalizado') DEFAULT 'pendente',
data_abertura DATE NOT NULL,
id_funcionário INT
);