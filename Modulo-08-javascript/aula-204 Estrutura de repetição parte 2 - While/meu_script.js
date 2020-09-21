//Estrutura de repetição, laços ou loops 
//while
/*
while(<condicao>){
    //códigos
}
*/
document.write('inicio <br/>')
var x = 1
while( x <= 10){
     x++;

     if (x === 5) {
         continue;
     }
    document.write(x + '<br/>')

    /*
    if(x === 5){
        break  
    }
    */

   
    //x += 3;
}

document.write('fim <br/>')
