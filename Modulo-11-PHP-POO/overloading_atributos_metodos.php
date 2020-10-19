<?php

//modelo
class Funcionario
{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters setters(overloading / sobrecargar)
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }

    //métodos
    function resumirCadFunc()
    {
        return $this->__get('nome')." possui ".$this->__get('numFilhos') ." filho(s)";
    }

    function modificarNumFilhos($numFilhos){
        //afetar um atributo do objecto
        $this->numFilhos = $numFilhos;
    }

    
}

$funcionario = new Funcionario();
$funcionario->__set('nome','Jose');
$funcionario->__set('numFilhos', 2);
$funcionario->__set('telefone', '936599679');
$funcionario->__set('salario', 200.000,00);
$funcionario->__set('cargo', 'Gerenciador de media');
echo $funcionario->resumirCadFunc();
echo '<br>';
//echo $funcionario->__get('nome').' possui '.$funcionario->__get('numFilhos').', é um '.$funcionario->__get('cargo').'.';
echo '<hr>';


$funcionario = new Funcionario();
$funcionario->__set('nome', 'Maria');
$funcionario->__set('numFilhos', 4);
$funcionario->__set('telefone', '93299679');
echo $funcionario->resumirCadFunc();
echo '<br>';
//echo $funcionario->__get('nome') . ' possui ' . $funcionario->__get('numFilhos');


