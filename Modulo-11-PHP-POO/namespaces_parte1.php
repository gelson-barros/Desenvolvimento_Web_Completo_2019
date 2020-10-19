<?php 

namespace A;
class Cliente implements \B\CadastrarInterface, \A\CadastrarInterface{
    public $nome = 'Jorge';

    public function __construct(){
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr){
        return $this->$attr;
    }
    
    public function salvar(){
        echo 'Salvar';
    }
    

    public function remover(){
        echo 'Remover';
    }
}

interface CadastrarInterface{
    public function salvar();
}


namespace B;

class Cliente implements \A\CadastrarInterface, \B\CadastrarInterface{
    public $nome = 'Jamilton';

    public function __construct(){
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    
    public function __get($attr){
        return $this->$attr;
    }
    
    public function remover(){
        echo 'Remover';
    }
     
    public function salvar(){
        echo 'Salvar';
    }
    
}

interface CadastrarInterface{
    public function remover();
}
//--------------------------
//$c = new Cliente();//ate aqui estamos no escopo do namespaces B
$c = new \A\Cliente(); //para estar no escopo do namespaces A

echo '<pre>';
print_r($c);
echo '</pre>';
echo $c->__get('nome');
?>