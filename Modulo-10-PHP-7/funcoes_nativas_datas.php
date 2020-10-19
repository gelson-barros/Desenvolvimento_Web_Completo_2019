<?php 
//date(formato) //recupera a data actual
//recuperação da data actual/data corrente
/*
echo date('d'); //dia numero do mês 01 á 31
echo "<hr>";
echo date('j'); //dia numero do mês 1 á 31
echo "<hr>";
echo date('D'); //dia da semana nome curto em inglês
echo "<hr>";
echo date('l'); //dia da semana nome completo em inglês
echo "<hr>";
echo date('N'); //dia da semana completo em inglês
echo "<hr>";
echo date('S'); 
echo "<hr>";
echo date('w');
echo "<hr>";
echo date('z'); // numero do dia em relacao ao ano 0 ate 365
echo "<hr>";
echo date('W'); // numero da semana em relacao ao ano 
echo "<hr>";
echo date('F'); // nome do mes completo
echo "<hr>";
echo date('m'); // numero do mes 01 ate 12 
echo "<hr>";
echo date('M'); // nome do mes curto
echo "<hr>";
echo date('n'); // numero do mes 1 ate 12 
echo "<hr>";
echo date('t'); // numero de dias no mes 28 ate 31 
echo "<hr>";
echo date('L');
echo "<hr>";
echo date('o');
echo "<hr>";
echo date('Y');//o ano por completo
echo "<hr>";
echo date('y'); //o ano por curto
echo "<hr>";
echo date('a'); //am ou pm
echo "<hr>";
echo date('A'); //AM ou PM
echo "<hr>";
echo date('B');
echo "<hr>";
echo date('g');
echo "<hr>";
echo date('G');
echo "<hr>";
echo date('h'); //horas das 01 ate  12
echo "<hr>";
echo date('H'); //horas das 00 ate 23
echo "<hr>";
echo date('i'); //minutos 00 ate 59
echo "<hr>";
echo date('s'); //segundos 00 ate 59
echo "<hr>";
*/
echo date('d/m/Y H:i:s');
echo "<hr>";





echo date_default_timezone_get();//recupera o timezone dafault da aplicação
date_default_timezone_set('America/Sao_Paulo'); //actualiza o timezone dafault da aplicação
echo "<hr>";
echo date_default_timezone_get();
echo "<hr>";
echo date('d/m/Y H:i:s');
echo "<hr>";
$data_inicial = '2018-04-24';
$data_final = '2018-05-15';
//calculo da data convertendo para timestamp
//(js->milissegundos / php-> segundos)
//strtotime((data))//Transforma datas textuais em segundos
echo $data_inicial.' - '.$time_inicial = strtotime($data_inicial);
echo "<hr>";
echo $data_final.' - '.$time_final = strtotime($data_final);
$diferenca_times = $time_final - $time_inicial;
echo "<hr>";
echo "A diferença de segundos entre a data inicial e final é: $diferenca_times";
echo "<hr>";
echo "A diferença de segundos entre a data inicial e final é: $diferenca_times";
echo "<hr>";
$sengundos_existem_dia = 24*60*60;
echo "Um dia possui $sengundos_existem_dia";
echo "<hr>";
$diferenca_times = $diferenca_times/ $sengundos_existem_dia;
echo "A diferença de dias entre data inicial e final $diferenca_times"
?>