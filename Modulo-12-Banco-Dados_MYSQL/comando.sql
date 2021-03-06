CREATE DATABASE nome_do_banco; //criar um novo banco de dados
DROP DATABASE nome_do_banco;//eliminar um banco de dados 
/****************************************************/
//Criar uma tabela
CREATE TABLE tb_curso (
    id_curso int not null ,
    imagem_curso varchar(100) not null,
    nome_curso char (50) not null,
    resumo text null,
    data_cadastro datetime not null,
    activo boolean default true,
    investimento float(8,2) default 0
);
/***********************************************************/
DROP TABLE tb_curso;//eliminar uma tabela
/**********************************************************/
//Editar nome de uma tabela
 RENAME TABLE nome_actual TO nome_novo;
 /**********************************************************/
//Permite a inclusão de uma nova coluna em uma tabela
 ADD
 ALTER TABLE tb_cursos ADD COLUMN carga_horaria varchar(5) not null;
/***********************************************************/
//Permite a alteração de nome de uma coluna e de suas propriedades, como por exemplo o tipo
//CHANGE
ALTER TABLE tb_cursos CHANGE COLUMN carga_horaria carga_hora int(5) null
/*********************************************************/
//Permite a remoção de uma coluna da tabela
//DROP
ALTER TABLE tb_cursos DROP COLUMN carga_horaria;
/********************************************************/
//Inserir a tabela
INSERT INTO tb_cursos (id_curso, imagem_curso, nome_curso, resumo, data_cadastro, activo, investimento,carga_horaria) VALUES ('2', 'curso_angular.jpg', 'Web Completo com JS, TS e Angular', 'Aprenda a criar aplicações front-end incríveis com JavaScript, TypeScript e Angular', '2020-07-17 12:06:59', '1', '576.85', '35');
/*******************************************************/
//selecionando todas coluna de uma determinada tabela 
SELECT * FROM tb_cursos
//selecionando algumas coluna de uma determinada tabela 
SELECT id_curso, resumo FROM tb_cursos
/********************************************************/

SELECT
	* 
FROM 
	tb_alunos 
WHERE 
	idade > 30


SELECT 
	* 
FROM 
	tb_alunos 
WHERE 
	interesse = 'jogos' AND idade > 30 AND estado = 'RN'


SELECT 
	* 
FROM 
	tb_alunos 
WHERE 
	interesse = 'jogos' OR interesse = 'Música' 

/*******************************************************/
SELECT 
    * 
FROM 
    tb_alunos
WHERE 
    idade BETWEEN 18 AND 25
/*ou*/
WHERE
    idade >= 18 AND idade <= 25

/***********************************************************/
SELECT 
    * 
FROM 
    tb_alunos 
WHERE 
    interesse IN('Jogos','Música','Esporte')
/*ou*/
WHERE
    interesse = 'Jogos' OR interesse = 'Esporte' OR interesse 'Música'
/*************************************************/

/*LIKE*/
/*permite realizar filtros com base em uma pesquisa de caracteres dentro de uma coluna textual*/
/*
% indica que pode haver a existência de uqalquer conjunto de caracter no texto
*/
SELECT 
    * 
FROM 
    tb_alunos 
WHERE 
	nome LIKE '%C%'
/*
_ indica que pode haver a existência de um ou mais caracteres em uma posição específica do texto
*/
SELECT 
    * 
FROM 
    tb_alunos 
WHERE 
	nome LIKE '_riel'

SELECT 
    * 
FROM 
    tb_alunos 
WHERE 
	nome LIKE '%tt_'
/**********************************************************/
/*Select - Oredenado Resultado*/

SELECT
<coluna(s)>
FROM
<tabela(s)>
WHERE
<filtro(s)>
ORDER BY
idade ASC, nome DESC

SELECT 
    * 
FROM 
    tb_alunos
WHERE 
    idade BETWEEN 18 AND 59
ORDER BY
	nome ASC

SELECT 
    * 
FROM 
    tb_alunos 
WHERE 
    idade BETWEEN 18 AND 59 
ORDER BY 
    idade ASC, nome DESC
/***********************************************/
/*
Select - limitando retorno
*/
SELECT
<coluna(s)>
FROM
<tabela(s)>
WHERE
<filtro(s)>
ORDER BY
<ordenação>
LIMIT 
5
OFFSET 
2

SELECT 
    * 
FROM 
    tb_alunos
LIMIT 4
OFFSET 8

SELECT 
    * 
FROM 
    tb_alunos
LIMIT 8, 4

/***************************************************/
limpar todos registro numa tabela mantendo as colunas
TRUNCATE tb_cursos;

/****************************************************/
/*
SELECT - Funções de agregação MAX, MIN e AVG
MIN(<coluna>) - Retorna o menor valor de todos os registros com base em uma coluna
MAX(<coluna>) - Retorna o maior valor de todos os registros com base em uma coluna
AVG(<coluna>) - Retorna o média de todos os registros com base em uma coluna
*/

SELECT 
    Funções de agregação
FROM
<tabela>
WHERE
<filtro(s)>

SELECT 
    MIN(investimento)
FROM 
    tb_cursos

SELECT 
    MAX(investimento)
FROM 
    tb_cursos

/****************************************************/
/*
SELECT - Funções de agregação SUM e COUNT
SUM(<coluna>) - Retorna o SOMA dos valor de todos os registros com base em uma coluna
COUNT(*) - Retorna a quantidade de todos os registros de uma tabela.
*/
SELECT 
    Funções de agregação
FROM
<tabela>
WHERE
<filtro(s)>

SELECT 
    SUM(investimento)
FROM 
    tb_cursos

SELECT 
    COUNT(*)
FROM 
    tb_cursos
WHERE
    area = true
/****************************************************/
/*
Select - Agrupando seleção de registro(GROUP BY)
Agrupa os registro com base em uma ou mais colunas cujos valores sejam iguais.Permite realizar funções de agregação em cada subconjunto agrupado de registros.
*/
SELECT 
    <coluna(s)>
FROM
    <tabela(s)>
WHERE
    <filtro(s)>
GROUP BY 
    agrupamento
ORDER BY
    <ordenação>
LIMIT
    <offset>, <limit>



SELECT 
* 
FROM 
tb_alunos 
GROUP BY
	interesse 


SELECT 
	* , COUNT(*)
FROM 
tb_alunos 
GROUP BY
	interesse 

SELECT 
	interesse , COUNT(*)
FROM 
tb_alunos 
GROUP BY
	interesse

SELECT 
	interesse , COUNT(*) AS total_por_interesse
FROM 
tb_alunos 
GROUP BY
	interesse

SELECT 
	estado , COUNT(*) AS total_por_estado
FROM 
tb_alunos 
where
	estado = 'ES'

/****************************************************/
/*
Select - Filtrando seleções agrupadas (HAVING)
Filtro realizado sobre o resultado dos agrupamentos(GROUP BY)

*/
SELECT 
    <coluna(s)>
FROM
    <tabela(s)>
WHERE
    <filtro(s)>
GROUP BY 
    agrupamento
HAVING
    filtro(s) sobre agrupamento
ORDER BY
    <ordenação>
LIMIT
    <offset>, <limit>


SELECT 
estado, COUNT(*) AS total_registro_por_estado 
FROM 
tb_alunos 
GROUP BY 
estado
HAVING
estado IN('MG', 'SP')

SELECT 
estado, COUNT(*) AS total_registro_por_estado 
FROM 
tb_alunos 
GROUP BY 
estado
HAVING
estado = 'MG'

SELECT 
estado, COUNT(*) AS total_registro_por_estado 
FROM 
tb_alunos 
GROUP BY 
estado
HAVING
total_registro_por_estado > 4

SELECT 
estado, COUNT(*) AS total_registro_por_estado 
FROM 
tb_alunos
WHERE
interesse != 'Esporte'
GROUP BY 
estado
HAVING
total_registro_por_estado > 4

/****************************************************/
/*
UPDATE - Actualizando registros
Filtro realizado sobre o resultado dos agrupamentos(GROUP BY)
*/

UPDATE
    <tabela>
SET 
    <coluna>=<valor>,<coluna>=<valor>,<coluna>=<valor>
WHERE
    <filtro(s)>

/****************************************************/
/*
DELETE - Excluindo registros

*/

DELETE FROM
    <tabela>
WHERE
    <filtro(s)>

DELETE FROM 
    tb_alunos
WHERE
    idade IN(18,23,34) AND interesse = 'Esporte'



UPDATE 
tb_clientes
SET
sexo = 'M'
WHERE 
id_cliente IN(1,2,3,6,7)