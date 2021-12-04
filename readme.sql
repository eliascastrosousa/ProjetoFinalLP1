create database elias;

use elias;

create table post(

	id smallint(5)	UNSIGNED AUTO_INCREMENT,
    imagem varchar(256),
    cor_categoria varchar(50)	,
    categoria varchar(40)	,
    titulo varchar(100)	,
    conteudo text,
    autor varchar(100)	,
    data date,
    created_at timestamp current_timestamp()	
);

create table usuarios(
    id_usuario int(11) primary key AUTO_INCREMENT,
	nome varchar(100),
	email	varchar(40),
	senha	varchar(32)
);

