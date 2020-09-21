//exercicio 1

var lista_frutas = Array();

lista_frutas[0] = "Banana";
lista_frutas[1] = "Maçã";
lista_frutas[2] = "Morango";
lista_frutas[3] = "Uva";
//console.log(lista_frutas.length)

for(var y = 0; y < lista_frutas.length; y++) {
    document.write(lista_frutas[y] + '<br/>')
}


//exercicio 2
/*
for (var x = 1; x <= 3; x++) {
    for (var y = 1; y <= 10; y++) {
        document.write(x + " ");
        document.write("x ");
        document.write(y);
        document.write(" =");
        document.write(x * y + "<br/>");
    }
    document.write("<br><br>");
}
*/
document.write("<br><br>");
var z = 1;
while (z <= 10) {
    document.write(1 + " x " + z + ' ='+ (1*z) + '<br>' );
    z++
}
var x = 1
var y = 1
document.write("<br><br>");
while(x <= 3){
    y=1;
    while(y <= 10){
        document.write(x + " x " + y + ' ='+ (y*x) + '<br>' )
        y++
    }
    x++
    document.write("<br><br>");
}