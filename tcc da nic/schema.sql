USE loja;
DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
n VARCHAR (50),
s VARCHAR(255),
e VARCHAR (50) NOT NULL
);
DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(       
id_cliente INT NOT NULL PRIMARY KEY,
n VARCHAR (50) ,
telefone VARCHAR (11),
endereco VARCHAR (100),
cidade VARCHAR (50),
FOREIGN KEY(id_cliente)REFERENCES usuario(id)
);

DROP TABLE IF EXISTS administrador;
CREATE TABLE administrador(
id_admin INT NOT NULL PRIMARY KEY,
FOREIGN KEY(id_admin) REFERENCES usuario(id)
);

INSERT INTO usuario (n, s, e) VALUES ('', '', '');
INSERT INTO administrador (id_admin) VALUES (1);


DROP TABLE IF EXISTS produto;
CREATE TABLE produto(
id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nomepro VARCHAR (50),
descricao VARCHAR(300),
preco FLOAT,
imagem VARCHAR(250),
visible BOOLEAN NOT NULL
);

INSERT INTO produto (nomepro, descricao, preco, imagem, visible)
VALUES ();




