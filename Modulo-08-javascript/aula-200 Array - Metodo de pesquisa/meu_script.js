//metodo de pesquisa no array

var lista_frutas = Array();
lista_frutas[0] = "Banana";
lista_frutas[1] = "Maçã";
lista_frutas[2] = "Morango";
//lista_frutas['e'] = "Morango";
lista_frutas[3] = "Uva";

//console.log(lista_frutas.indexOf('Morango'))

//se elemento existe retorno valor do index caso nao existe retorna  -1
//caso se procura um elemento que o seu index nao é numerico tem - 1 como retorno
if(lista_frutas.indexOf('Morango') === -1){
    console.log('elemento não existe')
}else{
    console.log(
        "elemento existe e está na posição " + lista_frutas.indexOf("Morango")
    );
}