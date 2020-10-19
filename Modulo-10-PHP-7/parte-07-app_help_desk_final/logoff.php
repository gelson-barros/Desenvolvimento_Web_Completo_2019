<?php
session_start();
/*
echo '<pre>';
print_r($_SESSION);
echo '</ pre>';

//remover índices do array de sessão apenas sê existir
//unset()

unset($_SESSION['x']);
echo '<pre>';
print_r($_SESSION);
echo '</ pre>';


//destruir a variável de sessão
//session_destroy()
session_destroy();
//deve força redirecionamento
echo '<pre>';
print_r($_SESSION);
echo '</ pre>';
*/
session_destroy();
header('Location: index.php');