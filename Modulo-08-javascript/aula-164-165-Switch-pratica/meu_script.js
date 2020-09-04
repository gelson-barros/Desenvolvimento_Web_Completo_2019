/**
 * Switch
 * O que é o comando switch?
 * é um condicional ou seja  ele visa
 * com base em uma condição seguir um determinado fluxo com as opcoes
 * ele so leva em consideração o operador identico
 *
 * var opcao = 2
 *
 * switch(opcao){
 *  case 1:
 *  //trecho de código que será executado
 *  break
 *
 *  case 2:
 *  //trecho de código que será executado
 *  break
 *
 *  default:
 *  //trecho de código que será executado
 *  break
 *
 * }
 */

 /*
var parametro = 2

switch (parametro) {
    case 1:
        //se parametro === 1
        document.write(" parametro 1")
        break;

    case 2:
        //se parametro === 2
        document.write("parametro 2")
        break;

    default:
        //se parametro não foi encontrado
        document.write("dafault")
        break;
}
*/

var parametro = prompt('Digite um numero');

switch (parseInt(parametro)) {
    case 1:
        //se parametro === 1
        document.write(" parametro 1");
        break;

    case 2:
        //se parametro === 2
        document.write("parametro 2");
        break;

    default:
        //se parametro não foi encontrado
        document.write("dafault");
        break;
}