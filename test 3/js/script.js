alert("Esse programa vai soma dois valores e mostra para o usuario");
alert("Caso esse usuario queira refazer a conta, atualize a pagina");
function calcular(){
    $numero01 = parseInt(document.getElementById("n1").value);
    $numero02 = parseInt(document.getElementById("n2").value);

    $resultado = $numero01 + $numero02;
    document.getElementById("resultado").innerText = $resultado;
}