//Praticando um pouco - Criando uma tabuada de 1 a 10 (lacos encadeados)

for(var i = 1; i <= 10; i++){
    document.write(1 + ' ')
    document.write('x ')
    document.write(i)
    if (i === 10) {
        document.write(' =')
    }else{
        document.write(' = ')
    }
    
    document.write(1 * i + '<br/>')
}
 
document.write("<br><br>");
for(var x = 1; x <= 3; x++){
    for(var y = 1; y <= 10; y++){
        document.write(x + " ")
        document.write("x ")
        document.write(y)
        document.write(" =")
        document.write(x * y + "<br/>");
    }
    document.write("<br><br>");
}

