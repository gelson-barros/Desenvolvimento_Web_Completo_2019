//operador ternario
//var resultado = <condicao> ? <verdadeiro> : <false>


var nota = prompt("Digite a nota do aluno:");
var faltas = prompt("Digite a quantidades de faltas:");
var media = 7;
var faltas_maximas = 15;
/*
if (media <= nota && faltas <= faltas_maximas) {
    document.write("Aprovado");
} else {
    document.write("Reprovado");
}

*/

var resultado = (media <= nota && faltas <= faltas_maximas) ? "Aprovado" : "Reprovado";
document.write(resultado);