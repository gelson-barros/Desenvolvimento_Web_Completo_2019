//Existe três escopos: global, da função e do bloco

var serie = 'Friends' //variavel de escopo global

//escopo de bloco
if (true) {
    var serie2 = 'Game of Thrones'//variavel de escopo global
    document.write(serie)
}

document.write("<br>")
document.write(serie2)
document.write('<br>')

function x(){
    var serie3 = 'The Wlking Dead'
    document.write(serie)
    document.write("<br>")
    document.write(serie2)
    document.write("<br>")
    document.write(serie3)
}

x()
document.write("<br>")
document.write(serie3)