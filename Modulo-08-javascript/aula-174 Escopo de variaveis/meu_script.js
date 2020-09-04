//Existe três escopos: global, função e de bloco

var serie = 'Friends' //variavel de escopo global

if (true) {
    document.write(serie)
}

document.write('<br>')

function x(){
    document.write(serie)
}

x()