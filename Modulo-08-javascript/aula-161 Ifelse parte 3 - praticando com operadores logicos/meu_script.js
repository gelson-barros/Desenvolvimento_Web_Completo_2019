/**
 * Operadores  lógicos
 * O que são operadaores lógicos?
 * são operadores que nos permite conectar operações de comparação
 * 
 * operadores:
 * E (&&) -- Verdadeiro se todas as expresssões forem verdairas
 * OU (||) -- Verdadeiro se pelo menos uma das expressões for 
 * verdadeiro
 * Negação(!) -- Inverte o resultado da expresão de comparação
 */


/*
document.write("Operador AND &&");
document.write('<br>');
document.write("---------------------------");
document.write("<br>");
//true && true && false = false
if (2 == 2 && 3 >= 1 && 'a' == 'b') {
document.write('Verdadeiro')
} else {
document.write('false')
}
document.write("<br>");
document.write("---------------------------");
//----------------------------------------------------------
document.write("<br>");
document.write("Operador OU ||");
document.write("<br>");
document.write("---------------------------");
document.write("<br>");
//true || true || false = true
if (2 == 2 || 3 >= 1 || "a" == "b") {
    document.write("Verdadeiro");
} else {
    document.write("false");
}
document.write("<br>");
document.write("---------------------------");
//----------------------------------------------------------
document.write("<br>");
document.write("Operador de negação !");
document.write("<br>");
document.write("---------------------------");
document.write("<br>");
if (!(4 >= 2)) {
    document.write("Verdadeiro");
} else {
    document.write("false");
}
*/
var nota = prompt("Digite a nota do aluno:")
var faltas = prompt("Digite a quantidades de faltas:")
var media = 7
var faltas_maximas = 15

if (media <= nota && faltas <= faltas_maximas) {
    document.write("Aprovado");
} else {
    document.write("Reprovado");
}

