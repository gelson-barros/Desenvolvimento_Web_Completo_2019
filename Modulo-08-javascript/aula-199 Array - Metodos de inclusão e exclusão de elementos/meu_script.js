//como incluir e excluir aprtir de uma logica de programação os dados do array

//array simples
//var lista_frutas = Array()

//lista_frutas[0] = 'Banana'
//lista_frutas[1] = 'Maçã'

//incluir elemento no final array
//lista_frutas.push('Uva')

//incluir elemento no início array
//lista_frutas.unshift('Uva')

//excluir elemento no final array
//lista_frutas.pop()

//incluir elemento no início array
//lista_frutas.shift()

//console.log(lista_frutas)

//array multidimensional
var lista_coisas = Array() 

lista_coisas['frutas'] = Array()
lista_coisas['pessoa'] = []

//incluir elemento no final array
lista_coisas['frutas'].push('Uva')
lista_coisas['frutas'].push('Maçã');

//incluir elemento no início array
lista_coisas['frutas'].unshift('Banana');

//excluir elemento no final array
lista_coisas['frutas'].pop()

//incluir elemento no início array
lista_coisas['frutas'].shift()


console.log(lista_coisas);
