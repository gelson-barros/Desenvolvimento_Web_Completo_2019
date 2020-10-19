<?php 

session_start();



//variavel que verifica sê a autenticação foi realizada
$usuario_autenticado = false;
//usuarios
$usuarios_app = array(
    array('email' => 'adm@teste.com.ao', 'senha' => '12345'),
    array('email' => 'user@teste.com.ao', 'senha' => 'abcde' ),
);

foreach($usuarios_app as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
    

}

if ($usuario_autenticado) {
    echo 'Usuário Auntenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'Um valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php');
}else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}

?>