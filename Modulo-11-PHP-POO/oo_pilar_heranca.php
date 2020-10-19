<?php 
//Herança
//codigo reutilizável e menos redundante(fácil na manutenção) 

class Carro extends Veiculo{
    
    public $teto_solar = true;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }
    
    function abrirTetoSolar(){
        echo 'Abrir teto solar';
    }
    function alterarPosicaoVolanta(){
        echo 'Alterar posição volante';
    }
    
}


class Moto extends Veiculo{
    
    public $contraPesoGuidao = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }
    function empinar(){
        echo 'Empinar';
    }
    
}

class Veiculo {
    public $placa = null;
    public $cor = null;
    function acelarar(){
        echo 'Acelerar';
    }
}

$carro = new Carro('ABDC123', 'Azul');
$moto = new Moto('DDF123', 'Vermelha');

echo '<pre>';
print_r($carro);
echo '<hr>';
print_r($moto);
echo '</pre>';

$carro->abrirTetoSolar();
echo '<br>';
$carro->acelarar();
echo '<hr>';

$moto->empinar();
echo '<br>';
$moto->acelarar();
echo '<hr>';

?>