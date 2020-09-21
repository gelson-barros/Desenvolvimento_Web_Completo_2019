//Estrutura de repetição com For in

//var listaConvidados = ['Jorge', 'Gelson', 'Jamiltom', 'José', 'Gélia']
var listaConvidados = Array()
listaConvidados[10] = 'Jorge'
listaConvidados[true] = "Gelson";
listaConvidados['zebra'] = "Jamiltom";
listaConvidados[-1] = "Gélia";
listaConvidados[4] = "José";
listaConvidados['x'] = "Antonio";

console.log(listaConvidados)

for(var x in listaConvidados){
    console.log('Indice ' + x +' valor ' + listaConvidados[x])
}