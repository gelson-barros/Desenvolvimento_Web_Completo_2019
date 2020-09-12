//Funcões nativas para manipular strings

var nome = 'Jorge Sant Ana'
document.write("|J|o|r|g|e| |S|a|n|t |   |  A  | n | a |");
document.write("<br>");
document.write('0 1 2 3456 7 89 10 11 12 13 14');
document.write("<hr>");
//propriedade length- retorna a qtd de caracters da string
//de 0 ate ...
document.write(nome.length)
document.write('<hr>');


// metodo charAt retorna o caracter com base na posição
document.write(nome.charAt(1))
document.write('<hr>')

// metodo indexOf retorna o primeiro valor da ocorrencia de umvalor especifico dentro da string(faz diferenciação de caracteres maiúsculo e minúsculo)
document.write(nome.indexOf('n'));
document.write('<hr>');

// metodo replace subistitui texto com base a  valor de pesquisa e valor de modificação 
document.write(nome.replace('Sant Ana', 'Silva'));
document.write('<hr>');

// metodo substr permite extrair parte de uma string com base a  posição inicial seguida a qtd de caracters
document.write(nome.substr(6, 4));
document.write('<hr>');

// metodo toUpperCase() coloca caracter de toda string maiusculo
document.write(nome.toUpperCase())
document.write('<hr>')

// metodo toLowerCase() coloca caracter de toda string minusculo
document.write(nome.toLowerCase())
document.write('<hr>')

var nome1 = ' Jorge Sant Ana '
// metodo trim() remove os espaço  das extremidade de um string
document.write('-'+ nome.trim() +'-')
document.write('<hr>')

