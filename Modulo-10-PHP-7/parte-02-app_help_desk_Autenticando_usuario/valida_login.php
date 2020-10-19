<?php 
//variavel que verifica sê a autenticação foi realizada
$usuario_autenticado = false;
//usuarios
$usuarios_app = array(
    array('email' => 'adm@teste.com.ao', 'senha' => '12345'),
    array('email' => 'user@teste.com.ao', 'senha' => 'abcde' ),
);
/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/
foreach($usuarios_app as $user){
    //print_r($user);
    //echo 'Usuário app'. $user['email'].'/'. $user['senha'];
    //echo '<br>';
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
    //echo 'Usuário Form: '. $_POST['email'].'/'. $_POST['senha'];
    //echo '<hr>';

}

if ($usuario_autenticado) {
    echo 'Usuário Auntenticado';
}else{
    //echo 'Erro na Autenticação do Usuário';
    header('Location: index.php?login=erro');
}


/*
print_r($_POST);
echo '<br>';
echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];
*/
?>