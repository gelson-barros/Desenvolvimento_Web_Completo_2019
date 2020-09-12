var num1 = parseFloat(prompt('Entra com um numero'))
var operacao = prompt("digita a operação de 'soma' ou 'subtração' para calcular")
var num2 = parseFloat(prompt('Entra com outro numero'))

document.write("A resultado de " + calcular(num1, num2, operacao));
function calcular(num1,num2,operacao){
    var resultado = 0;

    if(operacao == 'soma'){
        resultado = (num1 + num2)
    }else if(operacao == 'subtração'){
        resultado = (num1 - num2)
    }
    return resultado
}

