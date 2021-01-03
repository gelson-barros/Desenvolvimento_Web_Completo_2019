<?php 

//class dashboard
class Dashboard{
    public $data_inicio;
    public $data_fim;
    public $numeroVendas;
    public $totalVendas;
    public $clientesActivos;
    public $clientesInactivos;
    public $totalReclamacoes;
    public $totalElogios;
    public $totalSugestoes;
    public $totalDespesas;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
        return $this;
    }
}

//classe de conexao bd
class Conexao{
    private $host = 'localhost';
    private $dbname = 'dashboard';
    private $user = 'root';
    private $pass = '';

    public function conectar(){
        try{
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            //utf8
            $conexao->exec('set charset set utf8');
            return $conexao;

        }catch(PDOException $e){
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
}

//classe (model)
class Bd {
    private $conexao;
    private $dashboard;

    public function __construct(Conexao $conexao, Dashboard $dashboard){
        $this->conexao = $conexao->conectar();
        $this->dashboard = $dashboard;
    }

    public function getNumeroVendas(){
        $query = '
        SELECT 
            count(id) as numero_vendas 
        from 
            tb_vendas 
        Where 
            data_venda between :data_inicio and :data_fim';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio',$this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
    }

    public function getTotalVendas(){
        $query = '
        SELECT 
            sum(total) as total_vendas 
        from 
            tb_vendas 
        Where 
            data_venda between :data_inicio and :data_fim';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio',$this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
    }

    public function getClientesActivos(){
        $query = '
        SELECT 
            COUNT(*) as clientes_activos 
        FROM 
            tb_clientes 
        WHERE 
            cliente_ativo = 1';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->clientes_activos;
    }

    public function getClientesInactivos()
    {
        $query = '
        SELECT 
            COUNT(*) as clientes_inactivos 
        FROM 
            tb_clientes 
        WHERE 
            cliente_ativo = 0';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->clientes_inactivos;
    }

    public function getTotalReclamacoes()
    {
        $query = '
        SELECT 
            COUNT(*) as total_reclamacoes 
        FROM 
            tb_contatos 
        WHERE 
            tipo_contato = 1';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_reclamacoes;
    }

    public function getTotalElogios()
    {
        $query = 'SELECT 
            COUNT(*) as total_elegios 
        FROM 
            tb_contatos 
        WHERE 
            tipo_contato = 3';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_elegios;
    }

    public function getTotalSugestoes()
    {
        $query = 'SELECT 
            COUNT(*) as total_sugestoes 
        FROM 
            tb_contatos 
        WHERE 
            tipo_contato = 2';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_sugestoes;
    }

    public function getTotalDespesas()
    {
        $query =
        'SELECT 
            COUNT(total) as total_despesas 
        FROM 
            tb_despesas 
        WHERE 
           data_despesa between :data_inicio and :data_fim';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_despesas;
    }
    
}

//lógica do nosso script
$dashboard = new Dashboard();

$conexao = new Conexao();
$competencia = explode('-', $_GET['competencia']);

$ano = $competencia[0];
$mes = $competencia[1];
$dias_do_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

$dashboard->__set('data_inicio', $ano.'-'.$mes.'-01');
$dashboard->__set('data_fim', $ano.'-'.$mes.'-'.$dias_do_mes);

$bd = new Bd($conexao, $dashboard);

//$bd->getNumeroVendas();
$dashboard->__set('numeroVendas', $bd->getNumeroVendas());
$dashboard->__set('totalVendas', $bd->getTotalVendas());
$dashboard->__set('clientesActivos', $bd->getClientesActivos());
$dashboard->__set('clientesInactivos', $bd->getClientesInactivos());
$dashboard->__set('totalReclamacoes', $bd->getTotalReclamacoes());
$dashboard->__set('totalElogios', $bd->getTotalElogios());
$dashboard->__set('totalSugestoes', $bd->getTotalSugestoes());
$dashboard->__set('totalDespesas', $bd->getTotalDespesas());
/*
echo '<pre>';
print_r($bd->getTotalVendas());
echo '</pre>';
*/
//echo '<pre>';
//print_r($dashboard);
//echo '</pre>';

//print_r($_GET); //resposta da requisição
//print_r($competencia);
//print_r($ano.'/'.$mes.'/'.$dias_do_mes);
echo json_encode($dashboard);
?>