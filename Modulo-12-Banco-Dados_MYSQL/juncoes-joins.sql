/*
tabela a
tabela b

left join
**relaciona todos os registros da tabela à esquerda + CASO EXISTA todos os registros da tabela à direita**

right join
**relaciona todos os registros da tabela à direita + CASO EXISTA todos os registros da tabela à esquerda**

inner join junção interna
**relaciona todos os registros da tabela à direita e à esquerda onde exista relacionamento entre registros**
*/

SELECT
*
FROM
tb_clientes LEFT JOIN tb_pedidos 
ON(tb_clientes.id_cliente = tb_pedidos.id_cliente_fk)

SELECT
*
FROM
tb_produtos LEFT JOIN tb_imagens 
ON(tb_produtos.id_produto = tb_imagens.id_produto_fk)

SELECT
*
FROM
tb_clientes RIGHT JOIN tb_pedidos 
ON(tb_clientes.id_cliente = tb_pedidos.id_cliente_fk)

SELECT
*
FROM
 tb_pedidos LEFT JOIN tb_pedidos_produtos ON(tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido_fk)

SELECT
*
FROM
 tb_pedidos RIGHT JOIN tb_pedidos_produtos ON(tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido_fk)
 LEFT JOIN tb_produtos ON (tb_pedidos_produtos.id_produto_fk = tb_produtos.id_produto)

SELECT
*
FROM
 tb_produtos as p LEFT JOIN tb_descricoes_tecnicas as dt ON (dt.id_produto_fk = p.id_produto)

SELECT
c.id_cliente,
c.nome,
c.idade,
prod.produto,
prod.valor 
FROM 
tb_clientes AS c INNER JOIN tb_pedidos as p ON (p.id_cliente_fk = c.id_cliente)
INNER JOIN tb_pedidos_produtos AS pp ON (pp.id_pedido_fk = p.id_pedido)
LEFT JOIN tb_produtos AS prod ON (pp.id_produto_fk = prod.id_produto)