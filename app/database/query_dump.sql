create database controle_tcc;

use controle_tcc;

create table usuarios(
	id int not null primary key AUTO_INCREMENT,
	nome varchar(100) not null,
	email varchar(150) not null,
	senha varchar(32) not null,
    nivel int not null,
    deleted_at datetime default null,
    updated_at datetime default null,
    created_at datetime default current_timestamp
);

CREATE TABLE produto (
  id int NOT NULL primary key AUTO_INCREMENT,
  descricao varchar(100) NOT NULL,
  preco float DEFAULT 0,
  ativo int DEFAULT 1,
  deleted_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_at datetime DEFAULT current_timestamp()
);

insert into usuarios (nome, email, senha, nivel) values ('Fabio', 'fabio@gmail.com', '63a9f0ea7bb98050796b649e85481845', 1);

INSERT INTO produto (descricao, preco) VALUES ('Mouse', 50);
INSERT INTO produto (descricao, preco) VALUES ('Teclado', 80);
INSERT INTO produto (descricao, preco) VALUES ('Caixa de som', 55);
INSERT INTO produto (descricao, preco) VALUES ('Processador', 75);