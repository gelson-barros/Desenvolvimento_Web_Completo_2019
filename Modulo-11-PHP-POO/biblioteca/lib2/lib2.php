<?php

namespace B; 

class Cliente implements CadastrarInterface {
    public $nome = 'Jamilton';

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function remover()
    {
        echo 'Remover';
    }

}

interface CadastrarInterface
{
    public function remover();
}


?>