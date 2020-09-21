var objectos = Array('Cadeira', 'Impressora', 'Garfo')


function adiciona(){
    var entrada = document.getElementById('entrada').value
    if (entrada == '') {
        alert('Informe um valor válido')
    } else {
        if(objectos.indexOf(entrada) === -1){
            objectos.push(entrada);
            console.log(objectos);
            document.getElementById("entrada").value = "";
        }else{
            alert("Objecto já adicionado");
        }
    }
}

function ordena(){
    objectos.sort()
    console.log(objectos);
}
