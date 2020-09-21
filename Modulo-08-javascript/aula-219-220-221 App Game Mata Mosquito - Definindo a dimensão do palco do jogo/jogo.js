//alert('teste')
/*
//Saber a altura e largura do browser
var altura = window.innerHeight
var largura = window.innerWidth

console.log(altura,largura)
*/

//controlar apartir da acçao do redimensinamento da tela
var altura = 0
var largura = 0
function ajustaTamanhoPalcoJogo(){
    altura = window.innerHeight;
    largura = window.innerWidth;
    
console.log(altura, largura);
}
ajustaTamanhoPalcoJogo()