<?php 
// Abstração - Habilidade intuitiva de conhecimento das coisas ou seja compreender as coisas do mundo real e trazer para dentro do mundo da programação.

//Entidade
/*
E1: Produto
E2: Ideia
E3: Funcionario
    
*/
//Identidade
/*
E1: x = new Produto()
E2: z = new Ideia()
E3: y = new Funcionario()

*/
//Caracteristicas ou atributo
/*
E1: categoria, titulo, descricao, valor
E2: tipo, descricao, complexidade
E3: nome, telefone, numfilhos

*/
//Acções, métodos ou comportamentos
/*
E1: exibirResumoProduto, alterarValorProduto
E2: alterarTipoIdeia
E3: resumirCadFunc, modificarNumFilhos      
*/

//modelo
class Funcionario {

    //atributos
    public $nome = 'Jose';
    public $telefone = '936599679';
    public $numFilhos = 2;

    //métodos
    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filho(s)"; //'Esse é o resumo do cadastro do funcionario';
    }

    function modificarNumFilhos($numFilhos){
        //afetar um atributo do objecto
        $this->numFilhos = $numFilhos;
    }

}

$funcionario = new Funcionario();
echo $funcionario->resumirCadFunc();
$funcionario->modificarNumFilhos(3);
echo '<br>';
echo $funcionario->resumirCadFunc();
echo '<hr>';
$funcionario1 = new Funcionario();
echo $funcionario1->resumirCadFunc();
$funcionario1->modificarNumFilhos(1);
echo '<br>';
echo $funcionario1->resumirCadFunc();

?>