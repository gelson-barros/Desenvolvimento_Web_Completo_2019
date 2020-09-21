// Tratamento de erros com :
//try - tente
//catch - pegar
//finally - finalmente
//throw - lançar -> serve para lançar exceções dentro da nossa aplicações


//exemplo de ver filme netflix 
var video = Array()

video[1] = Array()
video[1]['nome'] = 'Avatar - A lenda de Aang'
video[1]['categoria'] = 'Anime'

function getVideo(Video){
    //lógica
    //http

    try{
        console.log(video[0]['nome'])
    }catch(erro){
        tratarErro(erro);
        console.log('Agora sim podemos tratar esse erro')
        throw new Error('Houve um erro mas não se preocupe, estamos trabalhando nisso agora!!!')
    }
    finally{
        console.log('Sempre passa por aqui try/catch')
    }

    console.log('aplicação não morreu')
}

function tratarErro(e){
    //lógica para registrar o erro no servidor
    console.log(e);
}

getVideo(video)