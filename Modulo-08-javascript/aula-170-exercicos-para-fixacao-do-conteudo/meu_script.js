
//Calculo do indice massa corporal

//Leia os dados de entrada
var nome = prompt('Digite o seu nome: ')
var altura = prompt("Digite o sua altura(cm): ")
var peso = prompt("Digite o seu peso(Kg): ")

//variavel da classificação
var classificacao

//conversão dos dados de entrada 
altura = (parseFloat(altura)/100)
peso = parseFloat(peso)

//calculo do indice de massa corporal
var M = peso/(altura * altura)


//condição para classificar as faixas
if (M < 16) {
    classificacao = "Baixo peso muito grave";
} else if (M >= 16 && M < 17 ) {
    classificacao = "Baixo peso grave"
} else if (M >= 17 && M < 18.50) {
    classificacao = "Baixo peso"
} else if (M >= 18.50 && M < 25) {
    classificacao = "Peso normal"
} else if (M >= 25 && M < 30) {
    classificacao = "Sobrepeso"
} else if (M >= 30 && M < 35) {
    classificacao = "Obesidade grau I"
} else if (M >= 35 && M < 40) {
    classificacao = "Obesidade grau II"
} else if (M >= 40) {
    classificacao = "Obesidade grau III"
} 
document.write(nome +" possui índice de massa corporal igual a " + M + ", sendo classificado como: " + classificacao)