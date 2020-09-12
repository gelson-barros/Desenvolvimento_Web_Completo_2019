//DOM - Documet Object Model
//Selecionando elementos da página
//apartir de alguns metodo da API do DOM
/**
 * Existe outros métdos mas os mais usados são:
 * -getElementById()- são unicos na pagina
 * -getElementsByTagName()
 * -getElementsByClassName()
 * -getElementsByName()
 */
/*
<input
    type="text"
    placeholder="Digite seu nome"
    id="nome_usuario"
    class="campo_texto"
    name="nome"
/>
*/

//console.log(document.getElementById("nome_usuario"))
//console.log(document.getElementsByTagName("input"));
//console.log(document.getElementsByClassName("campo_texto"));
console.log(document.getElementsByName("nome"));