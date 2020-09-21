//BOM - Browser Object Model
//Window.document
/*
window -> é a janela do browser onde conteudo é renderizado, nos temos portanto dentro do window o objecto document que fornece acesso aos elementos html da pagina 
window é um objecto formado pelo browser que incorpora a arvare de elemento de html da pagina.
documet é com arvore de elemento de html
ja Window.document podes mexer na arvore de elemento de html e tambem mexer nos recurso do browser 
exemplo da utilização é Alert()
*/

var janela

function abrirPopUp(){
    janela = window.open(
        "http://www.google.com",
        "nova_janela",
        "width=200, height=100"
    );
}

function fecharPopUp() {
    janela.close();
}