$(document).ready(() => {
    
    $('#documentacao').on('click', ()=>{
        //$('#pagina').load('documentacao.html')
        /*
        $.get('documentacao.html', data=>{
            //console.log(data)
            $('#pagina').html(data)
        })
        */
       $.post("documentacao.html", (data) => {
           //console.log(data)
           $("#pagina").html(data);
       });
    })

    $("#suporte").on("click", () => {
        //$("#pagina").load("suporte.html")
        /*
        $.get("suporte.html", (data) => {
            //console.log(data)
            $("#pagina").html(data);
        });
        */
       $.post("suporte.html", (data) => {
           //console.log(data)
           $("#pagina").html(data);
       });
    })

    //ajax 
    $('#competencia').on('change', e=>{
        //console.log($(e.target).val())
        let competencia = $(e.target).val();
        //console.log(competencia);
        //metodo, url, dados, sucesso, erro
        $.ajax({
            type: "GET",
            url: "app.php",
            data: `competencia=${competencia}`, //x-www-form-urlencoded
            dataType: 'json',
            success: (dados) => {
                $("#numeroVendas").html(dados.numeroVendas);
                $("#totalVendas").html(dados.totalVendas);
                $("#clientesActivos").html(dados.clientesActivos);
                $("#clientesInactivos").html(dados.clientesInactivos);
                $("#totalReclamacoes").html(dados.totalReclamacoes);
                $("#totalElogios").html(dados.totalElogios);
                $("#totalSugestoes").html(dados.totalSugestoes);
                $("#totalDespesas").html(dados.totalDespesas);
                //console.log(dados.numeroVendas, dados.totalVendas)
                //console.log(dados)
            },
            error: (erro) => {
                console.log(erro);
            },
        });
    })

})