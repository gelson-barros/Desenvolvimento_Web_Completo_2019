<?php 
//Polimorfismo
//Sobrescrita de métodos

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

    function trocarMarcha(){
        echo 'Desengatar embreagem com o mão e engatar marcha com pé';
    }
    
}

class Veiculo {
    public $placa = null;
    public $cor = null;

    function acelarar(){
        echo 'Acelerar';
    }

    function trocarMarcha(){
        echo 'Desengatar embreagem com o pé e engatar marcha com mão';
    }
}

$carro = new Carro('ABDC123', 'Azul');
$carro->trocarMarcha();

echo '<hr>';

$moto = new Moto('DDF123', 'Vermelha');
$moto->trocarMarcha();



?>