<?php
//print_r($_POST);
if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {





    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';//data search name
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        //query
        $query = "select * from tb_usuario where ";
        $query .= " email = :usuario";
        $query .= " AND senha = :senha";

        $stmt = $conexao->prepare($query);
        /*
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha']);
        */
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha'], PDO::PARAM_INT);

        $stmt->execute();
        $usuario = $stmt->fetch();

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
        //registrar erro
    }
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" placeholder="usuario" name="usuario" />
        <br>
        <input type="password" placeholder="senha" name="senha" />
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>

</html>