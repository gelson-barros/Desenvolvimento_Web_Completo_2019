<?php 

session_start();

//Estamos trabalhando na montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
//implode();
$texto = $_SESSION['id']. '#' .$titulo . '#' . $categoria . '#' . $descricao.PHP_EOL;

//abrindo p arquivo
$arquivo = fopen('../../../../app_help_desk/arquivo.hd', 'a');

//escrevondo o texto
fwrite($arquivo, $texto);

//fechando o arquivo
fclose($arquivo);
//echo $texto;

header('Location: abrir_chamado.php');
