<?php 


interface EquipamentoElectronicoInterface{
    public function ligar();

    public function desligar();
}
//-----------------------------------
class Geladeira implements EquipamentoElectronicoInterface{

    public function abrirPorta(){
        echo 'Abrir a porta';
    }
    public function ligar(){
        echo 'Ligar';
    }
    public function desligar(){
        echo 'Desligar';
    }

}

class TV implements EquipamentoElectronicoInterface{

    public function trocarCanal(){
        echo 'Trocar canal';
    }

    public function ligar()
    {
        echo 'Ligar';
    }
    public function desligar()
    {
        echo 'Desligar';
    }
}

$x = new Geladeira();
$y = new TV();

echo '<pre>';
print_r(get_class_methods($x));
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r(get_class_methods($y));
echo '</pre>';



interface MamiferoInterface{
    public function respirar();
}

interface TerrestreInterface{
    public function andar();
}

interface AquaticoInterface{
    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface {

    public function conversar(){
        echo 'Conversar';
    }
    public function respirar(){
        echo  'Respirar';
    }

    public function andar(){
        echo  'Andar';
    }
}

class Baleia implements AquaticoInterface, MamiferoInterface {

    public function esquichar(){
        echo 'Esquicahr';
    }

    public function respirar(){
        echo  'Respirar';
    }

    public function nadar(){
        echo 'Nadar';
    }
}
echo '<hr>';
$a = new Humano();
$b = new Baleia();

echo '<pre>';
print_r(get_class_methods($a));
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r(get_class_methods($b));
echo '</pre>';

 //--------------------

interface AnimalInterface{
    public function comer();
}

interface AveInterface extends AnimalInterface{
    public function voar();
}

class Papagaio implements AveInterface{
    public function comer(){
        echo 'Comer';
    }

    public function voar(){
        echo 'Voar';
    }
}

$papagaio = new Papagaio();
echo '<hr>';
echo '<pre>';
print_r(get_class_methods($b));
echo '</pre>';
?>