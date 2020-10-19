<?php 

class Pessoa{
    public $nome = null;

    function __construct($nome){
        echo 'objecto iniciado';
        $this->nome = $nome;
    }

    function __destruct(){
        echo 'Objecto removido';
    }

    function __get($atributo){
        return $this->$atributo;
    }

    function correr(){
        return $this->__get('nome').' está correndo';
    }

}

$pessoa = new Pessoa('Jorge');
echo '<br>';
echo $pessoa->__get('nome');
echo '<br>';
echo $pessoa->correr();
echo '<br>';
//unset($pessoa);//dispara proposital o método destructo
//mesmo não disparado propositadamente ele é chamdo no fim das ultima instrução.
?>