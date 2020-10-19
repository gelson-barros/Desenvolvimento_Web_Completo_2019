<?php 
//Encapsulamento
//segurança

class Pai {
    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    public $humor = 'Feliz';
    
    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $value){
        $this->$attr = $value;
    }

    private function executarMania(){
        echo 'Assobiar';
    }

    protected function responder(){
        echo 'Oi';
    }

    public function executarAcao(){
        $x = rand(1, 10);

        if($x >= 1 && $x <= 5){
            $this->responder();
        }else{
            $this->executarMania();
        }
        
    }
}

class Filho extends Pai {
    public function __construct(){
        //exibir os metodos do objecto
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    /*
    public function getAtributo($attr){
        return $this->$attr;
    }

    public function setAtributo($attr, $value){
        $this->$attr = $value;
    }
    */
    private function executarMania(){
        echo 'Cantar';
    }
    public function x(){
        $this->executarMania();
    }
    protected function responder(){
        echo 'Ola';
    } 
    
}

/*
$pai = new Pai();
echo $pai->__get('nome');
$pai->__set('nome','Gelson');
echo '<br>';
echo $pai->__get('nome');

echo '<hr>';
$pai->executarAcao();
*/

$filho = new Filho();

echo '<pre>';
print_r($filho);
echo '</pre>';
/*
echo $filho->getAtributo('humor');//public fica disponivel
echo '<br>';
echo $filho->getAtributo('sobrenome');//protected fica disponivel
//echo $filho->getAtributo('nome');//nao fica disponivel
echo '<br>';
$filho->setAtributo('humor', 'mal-humorado');
echo $filho->getAtributo('humor');
echo '<br>';
$filho->setAtributo('sobrenome', 'Ferreira');
echo $filho->getAtributo('sobrenome');
echo '<br>';
//se tentar setar um atributo privado de uma class pai herdada automaticamente criar um atributo na class instanciada herdeira ou filha
$filho->setAtributo('nome', 'Gelson');
echo '<pre>';
print_r($filho);
echo '</pre>';
echo $filho->getAtributo('sobrenome');
*/

//exibir os metodos do objecto
echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';
/*
echo $filho->__get('nome');
$filho->__set('nome', 'Gelson');
echo '<br>';
echo $filho->__get('nome');
*/
$filho->executarAcao();
echo '<br>';
$filho->x();

?>