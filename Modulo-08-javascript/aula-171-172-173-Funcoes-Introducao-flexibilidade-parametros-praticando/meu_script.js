//Funções
//encapsular um bloco de códigos com um objectivo defenido
//as funões podem ser de dois tipo
//void sem retorno
//com retorno

//void sem retorno
/*
function calcularAreaTerreno(largura, comprimento) {
    //lógica
    var area = largura * comprimento;
    document.write('O terreno possui '+area + ' metros quadrados')
}
calcularAreaTerreno(15, 25);
*/
//com retorno
/*
function calcularAreaTerreno(largura, comprimento) {
    //lógica
    var area = largura * comprimento;
    return area;
}
//document.write("O terreno possui " + calcularAreaTerreno(15, 25) + " metros quadrados");

var largura = parseFloat(prompt("Digite  a lagura: "))
var comprimento = parseFloat(prompt("Digite  a comprimento: "))
var area = calcularAreaTerreno(largura, comprimento)
document.write("O terreno possui " + area + " metros quadrados")
*/

// flexibilidade nos parametros
//descartar os outros parametros
function soma(a, b) {
    //b = b === undefined ? 0 : b
    //a = a === undefined ? 0 : a;
    return a + b;
}

//console.log(soma(7, 7))
//console.log(soma(7, 7 , 5))//desconsidera parametros adicionais
//console.log(soma(7));//NaN not a number
console.log(soma());//NaN not a number
