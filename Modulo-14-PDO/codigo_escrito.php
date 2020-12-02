<?php

/*
    $query = '
        create table tb_usuarios(
            id int not null primary key auto_increment,
            nome varchar(50) not null,
            email varchar(100) not null,
            senha varchar(32) not null
        )
    ';
            
    $conexao->exec($query);
    */
//exec traz a quantidade linha que foi afectado
//qtd de linha->aumentado ou removendo linhas //0-> actualizar, listar, criar tabela não afecta nehuma linha
//echo $retorno;
/*
    $query = '
        insert into tb_usuario(
            nome, email, senha
        )values(
            "Gelson Ferreira", "gelson@teste.com", "12345"
        )
    ';
    
    $retorno = $conexao->exec($query);
    echo $retorno;
    */
/*
    $query = '
        delete from tb_usuarios
    ';
    */
/*
    $query = '
        insert into tb_usuario(
            nome, email, senha
        )values(
            "Gelson Ferreira", "gelson@teste.com", "12345"
        )
    ';
    $conexao->exec($query);

    $query = '
        insert into tb_usuario(
            nome, email, senha
        )values(
            "Dimuini Zalana", "miguel@teste.com", "12345"
        )
    ';

    $conexao->exec($query);

    $query = '
        insert into tb_usuario(
            nome, email, senha
        )values(
            "Tárcio Quissanga", "tata@teste.com", "12345"
        )
    ';

    $conexao->exec($query);
    */

//consulta ************************************

/*
    fetchAll()
    $query = '
        select * from tb_usuario
    ';
    $stmt = $conexao->query($query);
    echo "<pre>";
    print_r($lista);
    echo "<pre>";
    //$lista = $stmt->fetch(); //retorna o primeiro registro
    //$lista = $stmt->fetchAll(); //retorna todos registro como array( associativo e numerico)
    //$lista = $stmt->fetchAll(PDO::FETCH_BOTH); //retorna todos registro como array( associativo e numerico)
    //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna todos registro como array associativo
    //$lista = $stmt->fetchAll(PDO::FETCH_NUM);//retorna todos registro como array numerico
    $lista = $stmt->fetchAll(PDO::FETCH_OBJ);//retorna todos registro como objecto
    echo "<pre>";
    print_r($lista);
    echo "<pre>";

    //echo $lista[0]['nome'];//ASSOCIATIVO
    //echo $lista[0][1]; //NUMERICO
    //echo $lista[0]->nome; //OBJECTO

    //fetch()********
    $query = '
        select * from tb_usuario where id = 3
    ';

    $query = '
        select * from tb_usuario order by nome desc limit 1
    ';
    //PDO Statement
    $stmt = $conexao->query($query);

    //$usuario = $stmt->fetch(PDO::FETCH_OBJ); //retorna todos registro como objecto
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);//retorna todos registro como objecto
    echo "<pre>";
    print_r($usuario);
    echo "<pre>";

    echo $usuario['nome'];//ASSOCIATIVO
    //echo $usuario[1]; //NUMERICO
    //echo $usuario->nome; //OBJECTO
    */
//foreach***********************************************
$query = '
        select * from tb_usuario 
    ';
//PDO Statement
//$stmt = $conexao->query($query); 
foreach ($conexao->query($query) as $chave => $valor) {
    //print_r($valor);
    print_r($valor['nome']);
    //print_r($valor[1]);
    echo '<hr>';
}
//$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);//retorna todos registro como objecto
//echo "<pre>";
//print_r($lista_usuarios);
//echo "<pre>";

//echo $lista_usuarios  ['nome'];//ASSOCIATIVO
/*
    foreach($lista_usuarios as $key => $value){
        print_r($value['nome']);
        echo '<hr>';
    }
    */

$query = '
        select * from tb_usuario 
    ';
//PDO Statement
//$stmt = $conexao->query($query); 
foreach ($conexao->query($query) as $chave => $valor) {
    //print_r($valor);
    print_r($valor['nome']);
    //print_r($valor[1]);
    echo '<hr>';
} 
    //$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);//retorna todos registro como objecto
    //echo "<pre>";
    //print_r($lista_usuarios);
    //echo "<pre>";

    //echo $lista_usuarios  ['nome'];//ASSOCIATIVO
    /*
    foreach($lista_usuarios as $key => $value){
        print_r($value['nome']);
        echo '<hr>';
    }
    */
    
    /*
        $query= "select * from tb_usuario where ";
        $query .= " email = '{$_POST['usuario']}'";
        $query .= " AND senha = '{$_POST['senha']}'";
    */
    //SQL Injection************************************************
