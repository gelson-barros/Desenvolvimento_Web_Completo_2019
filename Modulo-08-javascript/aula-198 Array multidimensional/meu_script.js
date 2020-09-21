
//array multidimensional
var lista_coisas = Array()

lista_coisas['frutas'] = Array('Banana', 'Macã', 'Morango', 'Uva')

/*
lista_coisas['frutas'][1] = 'Banana'
lista_coisas['frutas'][2] = 'Macã'
lista_coisas['frutas'][3] = 'Morango'
lista_coisas['frutas'][4] = 'Uva'
*/

//lista_coisas['pessoa'] = ['João', 'António', 'Barros', 'Miguel']
lista_coisas['pessoa'] = []
lista_coisas['pessoa']['a'] = 'João'
lista_coisas['pessoa']['b'] = 'António'
lista_coisas['pessoa']['c'] = 'Barros'
lista_coisas['pessoa']['d'] = 'Miguel'
//document.writeln(lista_coisas['frutas'][3]);
document.writeln(lista_coisas["pessoa"]['b']);
