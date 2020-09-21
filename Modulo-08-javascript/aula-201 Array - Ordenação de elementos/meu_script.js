//ordenação de elemenots de array
/*
var lista_frutas = Array()

lista_frutas[0] = 'Maçã'
lista_frutas[1] = 'Uva'
lista_frutas[2] = 'Banana'
lista_frutas[3] = 'Morango'

//metodo sort() para ordenção alfanumerico nos elementos
console.log(lista_frutas.sort())
*/
var lista_numeros = Array();

lista_numeros[0] = 12
lista_numeros[1] = 45
lista_numeros[2] = 3
lista_numeros[3] = 4
lista_numeros[4] = 1
lista_numeros[5] = 18

console.log(lista_numeros.sort(ordenaNumeros));

function ordenaNumeros(a, b){
    return a - b;
    // < 0 = a ordenado antes de b
    // > 0 = b ordenado antes de a
    // == a ordem é mantida
}

//se houver um elemento como string e outros com numeros vai ocorrer erro