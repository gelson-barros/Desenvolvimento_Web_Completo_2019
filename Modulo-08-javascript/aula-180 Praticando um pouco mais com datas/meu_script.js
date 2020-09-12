var data = new Date();


document.write("Calculo de data<hr/>");
//calculo de data
//obs:mes(0 áte 11)
//15/01/2017 
var data1 = new Date(2017, 0, 15);

//23/02/2017 
var data2 = new Date(2017, 1, 23);

document.write(data1.toString());
document.write("<hr>");
document.write(data2.toString());
document.write("<br><br><hr/>");

//converter datas para que possam ser calculados
document.write(data1.getTime());
document.write("<hr>");
document.write(data2.getTime());
//calculo se basea a esta desde 1 de janeiro de 1970 ate a data atual
document.write("<hr>");
//encontrar a qtde de milissegundos entre data1 e data2
var milissegundos_entre_datas = Math.abs(data1.getTime() - data2.getTime());
document.write(milissegundos_entre_datas);
document.write("<hr>");
//1 dia tem 24 hora, cada hora tem 60 minutos,
//cada minituo tem 60 segundos e cada segundo tem 1000 milissegundos
//quanto milissegundos
var milissegundos_por_dia = 1 * 24 * 60 * 60 * 1000;
document.write("1 dia tem: " + milissegundos_por_dia + " milissegundos");
document.write("<hr>");
document.write('A diferença entre ' + data1.getDate() + "/" + (data1.getMonth() + 1) + "/" + data1.getFullYear() + ' e ' + data1.getDate() + "/" + (data1.getMonth() + 1) + "/" + data1.getFullYear() + ' é de ' +  (milissegundos_entre_datas / milissegundos_por_dia) + ' dias');

