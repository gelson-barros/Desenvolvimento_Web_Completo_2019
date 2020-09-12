//Funções nativas para datas
var data = new Date()

//saber o dia  do mês
var x = data.getDate()
document.write(x)
document.write('<hr>')

//saber o mês em numeros [0 ate 12]
var x = data.getMonth() + 1
document.write(x)
document.write('<hr>')

//saber o ano
var x = data.getFullYear()
document.write(x)
document.write('<hr>')

//concatenação de tudo
document.write(data.getDate() + ' / ' +  (data.getMonth() + 1 ) + ' / ' + data.getFullYear())