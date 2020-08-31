var a = 10
var b = 20
var c = null //variável auxiliar utilizada na lógica

document.write('A: '+ a + '<br>')
document.write('B: ' + b + '<br>')
document.write('C: ' + c + '<br>')
document.write('<hr/>')


// Lógica de inversão dos valores das variáveis A e B

/**
 * minha resolução
 * c = a
 * a = b
 * b = c 
 * c = null
 */

c = a // utilizada a variavel C para armazenar temporariamente o valor da variável A
a = b // sobrepõe o valor da variavel A com com o valor da viriável B
b = c // sobrepõe o valor da variável B com o valor da variável C (C nesse momento contém o valor da variável A)
c = null //opcional: remove o valor contido na variável C

//
document.write("A: " + a + "<br>");
document.write("B: " + b + "<br>");
document.write("C: " + c + "<br>");