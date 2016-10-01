/* SCHEMA DO PROJETO AULA 4 */

/* Remover a base Aula_4 */
DROP DATABASE Aula_4;

/* Cria a base novamente, zerada ambiente desenvolvimento*/
CREATE DATABASE Aula_4;

/* Selecionar o banco Aula_4 (Namespace Aula_4) */
USE Aula_4;

/* Criacao da tabela usuario */
CREATE TABLE usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	senha VARCHAR(100) NOT NULL
);


/* Criacao da tabela para registrar o login do usuario */
CREATE TABLE log_login(
	id INT PRIMARY KEY AUTO_INCREMENT,
	usuario_id INT,
	login_data TIMESTAMP,
	acao VARCHAR(100) NOT NULL,

	FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);