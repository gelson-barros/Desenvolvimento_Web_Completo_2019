
//Diferenca entre o atributo length de variaveis do tipo string e array
/**
 * a diferença que existe entre length do string e um array que na string te retorna a qtd de caracteres na string.
 e o array 
 analiza maior maior index do array e soma mais retorna este valor
 se nao tiver um index numerico retorna 0
 mesmo tendo index de caracteres ou string mas tem um numerico ele busca maior e soma mais um retorna este valor
 */
//var lista_frutas = Array();

var lista_frutas = []
/*
//este tem um valor de acordo com qtd de valor  indexado
lista_frutas[0] = 'Banana'
lista_frutas[1] = 'Maçã'
lista_frutas[2] = 'Morango'
lista_frutas[3] = 'Uva'
*/
/*
//te retorna 6
lista_frutas[5] = "Banana";
lista_frutas[1] = "Maçã";
lista_frutas[2] = "Morango";
lista_frutas[3] = "Uva";
*/
/*
//te retorna 6
lista_frutas[0] = "Banana";
lista_frutas[1] = "Maçã";
lista_frutas['x'] = "Morango";
lista_frutas[5] = "Uva";
*/
/*
//te retorna 6
lista_frutas[5] = "Banana";
lista_frutas["e"] = "Maçã";
lista_frutas["s"] = "Morango";
lista_frutas["q"] = "Uva";
*/
//retorno 4
//var lista_frutas = Array("Banana", "Maçã", "Morango", "Uva");

//te retorna 0
lista_frutas['e'] = "Banana";
lista_frutas["e"] = "Maçã";
lista_frutas["s"] = "Morango";
lista_frutas["q"] = "Uva";

console.log(lista_frutas);
