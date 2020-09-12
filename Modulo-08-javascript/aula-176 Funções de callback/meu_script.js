//Funcões de callback
/**
 * São funcões encaminhada como parametro  para 
 * outras funções.
 * objectivo é a apos a finalização da função
 * ter condições de chamar funções encaminhada
 * por parametro dando continuidade no
 * processamento da logica da aplicação.
 * É comum para aplicações com processamento
 * assincrono
 */


 function exibirArtigo(id, callbackSucesso, callbackErro){
    //lógica: recupera o id via requisição http
    if (true) {
        callbackSucesso('Funções de callback em JS','Funções de callback são muito utilizadas.....' )
    }else{
        callbackErro('Erro ao recuperar os dados')
    }

 }

 var callbackSucesso = function (titulo, descricao) {
    document.write('<h1>' + titulo + '</h1>')
    document.write('<hr>');
    document.write('<p>' + descricao + '</p>')
 }
 var callbackErro = function (erro) {
    document.write('<p><b>Erro: </b>' + erro + '</p>')
 }

 exibirArtigo(1, callbackSucesso, callbackErro)
