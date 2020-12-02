/*
relacionamento entre tabelas
chave primaria
chave estrangeira

tb_alunos
tb_cursos
tb_disciplinas
*/


CREATE TABLE tb_produtos(
    id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    produto INT NOT NULL,
    valor FLOAT(8,2) NOT NULL 
)

CREATE TABLE tb_descriçoes_tecnicas(
    id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto_fk INT NOT NULL,
    descricao_tecnica TEXT NOT NULL,
    FOREIGN KEY(id_produto_fk) REFERENCES tb_produtos(id_produto) 
)

CREATE TABLE tb_imagens(
    id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto_fk INT NOT NULL,
    url_imagem VARCHAR(200) NOT NULL,
    FOREIGN KEY(id_produto_fk) REFERENCES tb_produtos(id_produto) 
)

CREATE TABLE tb_clientes(
    id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT(3) NOT NULL 
)

CREATE TABLE tb_pedidos(
    id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente_fk INT NOT NULL,
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id_cliente_fk) REFERENCES tb_clientes(id_cliente) 
)

CREATE TABLE tb_pedidos_produtos(
    /*id_pedido_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,*/
    id_pedido_fk INT NOT NULL,
    id_produto_fk INT NOT NULL,
    FOREIGN KEY(id_pedido_fk) REFERENCES tb_pedidos(id_pedido),
    FOREIGN KEY(id_produto_fk) REFERENCES tb_produtos(id_produto)
)

INSERT INTO tb_pedidos_produtos (id_pedido_fk,id_produto_fk)VALUES(1,2)