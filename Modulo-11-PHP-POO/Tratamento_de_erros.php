<?php 
//try -tente
//catch - pegar
//finally - finalmente
//throw - lançar

//tenha uma lógica
try {
    //tenha uma lógica onde possa ocorrer um potencial erro (exceção)
    echo '<h3> *** Try *** </h3>';
    $sql = 'Select * from clients';
    //mysql_query($sql);//erro

    if(!file_exists('require_arquivo.php')){
        throw new Exception('O arquivo em questão deveria estar disponivel as '.date('d/m/Y H:i:s').' horas, mas naõ estava. Vamos seguir mesmo assim!');
        
    }

} catch(Error $e){
    echo '<h3> *** Catch Error *** </h3>';
    echo "<p style='color: red;'> *** $e *** </p style='color: red;'>";
    //pode ser armazenado
} catch (Exception $e) {
    echo '<h3> *** Catch Exception *** </h3>';
    echo "<p style='color: red;'> *** $e *** </p style='color: red;'>";
}finally{//é opcional
    echo '<h3> *** Finally *** </h3>';
}
//tenha uma lógica
/*
try {
    //tenha uma lógica onde possa ocorrer um potencial erro (exceção)
}
*/
?>