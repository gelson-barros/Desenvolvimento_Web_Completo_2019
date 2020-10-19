<?php



//modelo
class Funcionario
{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //setters
    function setNome($nome){
        $this->nome = $nome;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }


    //getters 
    function getNome(){
        return $this->nome;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }


    //métodos
    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filho(s), e seu numero de telefone é $this->telefone"; //'Esse é o resumo do cadastro do funcionario';
    }

    function modificarNumFilhos($numFilhos){
        //afetar um atributo do objecto
        $this->numFilhos = $numFilhos;
    }

    
}

$funcionario = new Funcionario();
$funcionario->setNome('Jose');
$funcionario->setNumFilhos(2);
$funcionario->setTelefone('936599679');
echo $funcionario->resumirCadFunc();
echo '<br>';
$funcionario->setTelefone('936349679');
//echo $funcionario->resumirCadFunc();
echo $funcionario->getNome().' mudou o seu numero para'. $funcionario->getTelefone();
echo '<hr>';



$funcionario1 = new Funcionario();
$funcionario1->setNome('Abrão');
$funcionario1->setNumFilhos(4);
$funcionario1->setTelefone('996599679');
echo $funcionario1->resumirCadFunc();
echo '<br>';
$funcionario1->setNumFilhos(5);
echo $funcionario1->resumirCadFunc();