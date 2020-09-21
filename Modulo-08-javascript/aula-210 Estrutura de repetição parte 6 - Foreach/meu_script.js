//Estrutura de repetição com Foreach
//não considera valor de array que tem index com  ou string ou ainda valores negativo e tambem bool
var listaConvidados = Array();
listaConvidados[10] = "Jorge";
listaConvidados[true] = "Gelson";
listaConvidados["zebra"] = "Jamiltom";
listaConvidados[-1] = "Gélia";
listaConvidados[4] = "José";
listaConvidados["x"] = "Antonio";

var f = function (valor, indice) {
    console.log(valor, indice);
};

listaConvidados.forEach(f);

/*
var listaFuncionarios = ["Jorge", "Gelson", "Jamiltom", "José", "Gélia"];

var f = function (valor, indice) {
    console.log(valor, indice);
}

listaFuncionarios.forEach(f);
*/
/*
listaFuncionarios.forEach(function (valor, indice) {
    console.log(valor, indice);
});
*/


/*
console.log(listaFuncionarios)
listaFuncionarios.forEach(function(valor, indice, array){
    //lógica
    console.log("indice " + indice + " | valor: " + valor);
    //console.log(array)

    //para substituir algum valor do array
    if( valor == 'Jamiltom'){
        array[indice] = 'Damasceno'
    }

})

console.log(listaFuncionarios);
*/