/**
 * casting de tipos com 
 * toString()
 * parseInt()
 * parseFloat()
 * 
 * O casting é converter um tipo de dados em outro tipo de dados
 * se não fazer está conversao pode interferir no resultado da * instrução que estamos criando
 * 
 * o javascript é uma linguagem fracamente tipada ou seja a 
 * inferencia do tipo da variavel é definida no momento da 
 * da atribuição de valores.
 * em função disto durante processamento script possa ser que
 * a variavel pode receber outros tipos de valores, portanto,~
 * passa ter outro tipo de valores
 * 
 * 
 * valores que vem do prompt comado, de elementos html e de 
 * bancos de dados são string, ou seja os dados externos do 
 * script sao string
 */

//var variavel1 = prompt('Digite algum numero:')
//var variavel2 = prompt("Digite algum numero:")

var variavel1 = 10;
var variavel2 = 20;


/**
 * parseInt para valores ou numeros inteiros
 * parseFloat para valores ou numeros de dízimas
 */
////variavel1 = parseInt(variavel1);
variavel2 = parseFloat(variavel2);
toString();
console.log(variavel1);
console.log(variavel2);

document.write(variavel1.toString() + variavel2.toString);
