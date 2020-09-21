//BOM - Browser Object Model
//Window.screen
/*
window.screen -> fornece acesso atributos relativos a tela do browser, atraves do objecto screen nos podemos ter acesso como exemplo a informações de largura e altura da parte interna no navegador aonde os elementos html são renderizados.
Nós podemos ter também essa mesma informação considerando a barra de ferramenta e a barra de status, alem de outros atributos que podem ser recuperados
*/

var altura = window.screen.availHeight
var largura = window.screen.availWidth
//document.write("Altura do navegador é:" + altura + '<br>');
//document.write("largura do navegador é:" + largura);
if (largura < 500) {
    document.write("Logica para impressão do menu versão mobile");
} else {
    document.write("Logica para impressão do menu versão web");
}