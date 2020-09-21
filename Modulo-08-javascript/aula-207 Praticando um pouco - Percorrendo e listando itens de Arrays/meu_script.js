//Praticando um pouco - Percorrendo e listando itens de Arrays

var lista_frutas = Array()

lista_frutas[0] = 'Banana'
lista_frutas[1] = 'Maçã'
lista_frutas[2] = 'Morango'
lista_frutas[3] = 'Uva'
lista_frutas[4] = 'Manga'
//console.log(lista_frutas.length)
var y = 0
while ( y < lista_frutas.length) {
    //acção
    document.write(lista_frutas[y] + '<br/>');
    y++
}

