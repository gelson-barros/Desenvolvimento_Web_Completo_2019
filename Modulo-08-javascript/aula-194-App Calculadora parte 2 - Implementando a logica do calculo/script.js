function calcular(tipo, valor){
    if (tipo === 'acao') {//quando é uma ação
        if (valor === 'c') {
            //limpar o visor (id resultado)
            document.getElementById("resultado").value = '';
        }
        if (valor === '+' || valor === '-' || valor === '*' || valor === '/' || valor === '.') {
            if (eSomenteNumero(ultimoCaracter(document.getElementById("resultado").value))) {
                document.getElementById("resultado").value += valor;
            }else{
                document.getElementById("resultado").value = (document.getElementById("resultado").value).replace(/.$/, valor);// /.$/->mostra o ultimo caracter da string
            }
        }

        if (valor === '=') {
            var valor_campo = document.getElementById('resultado').value;
            document.getElementById('resultado').value = eval(valor_campo)
        }

    } else if (tipo === 'valor') {//quando é um numero

        document.getElementById('resultado').value += valor
    }
}

//para seber se num string tem só numero
function eSomenteNumero(string){
    return !isNaN(parseFloat(string)) && isFinite(string);
}

//para localizar ultimo caracter de um string
function ultimoCaracter(string){
    return string.substr(string.length - 1);
}


