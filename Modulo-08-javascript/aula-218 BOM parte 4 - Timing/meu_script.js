//BOM - Browser Object Model
//Window do timing ou tempo
/*
1-setTimeout(<acçã>,<tempo em milissegundos>);
clearTimeout()
Executa acção uma vez após o tempo informado
2-setInterval(<acçã>,<tempo em milissegundos>)
clearInterval()
Sempre executa a acção após o periodo informado

Esses dois metodos permite com base na definição de um intervalo de tempo executar uma acção de forma programatica ou seja excutam as acções depois de um intervalo de tempo
*/

/*
setTimeout(function(){ document.write('Só Uma vez <br>')}, 2000)
document.write('<br>')
setInterval(function(){ document.write("loop infinito <br>");}, 10000)
*/
var i = 5
var x = setInterval(function(){
    document.write(i + "<br>"); 
    i--
    if(i ===0 ){
        clearInterval(x);
        //window.location.reload()
    }
}, 1000)


