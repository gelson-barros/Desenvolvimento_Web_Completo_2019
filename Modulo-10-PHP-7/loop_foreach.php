<?php 
//foreach é especializado em array e objecto

$itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

echo '<pre>';
print_r($itens);
echo '</pre>';

foreach ($itens as  $key => $item) {
    echo "$key => $item <br>";

    if($item == 'mesa'){
        echo '(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
    }
}
?>