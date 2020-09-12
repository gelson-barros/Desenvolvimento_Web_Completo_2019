//DOM - Documet Object Model
//Exercicio

function mudaFoco(){//muda a fundo com focus
    document.getElementById("entrada").style.backgroundColor = "yellow";
}

//alterar fundo com menos de tres e mais de tres quando perde o foco
function alterarBgComCararter(){
    var caracter = document.getElementById("entrada").value;
    //limpar espaços em branco nas extremidades da string
    caracter.trim();
    if(caracter.length > 3 ){
        document.getElementById("entrada").style.backgroundColor = "green";
    }else{
        document.getElementById("entrada").style.backgroundColor = "red";
    }
}