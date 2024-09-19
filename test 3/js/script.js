alert("Esse programa vai soma dois valores e mostra para o usuario");
alert("Caso esse usuario queira refazer a conta, atualize a pagina");

function calcular(){
    $numero01 = parseInt(document.getElementById("n1").value);
    $numero02 = parseInt(document.getElementById("n2").value);
    $formadecalcular = document.getElementById("formaDeCalculo").value;

    if($formadecalcular == "+"){
         $resultado = $numero01 + $numero02;
         document.getElementById("resultado").innerText = $resultado;
    }
    else if($formadecalcular == "-"){
        $resultado = $numero01 - $numero02;
        document.getElementById("resultado").innerText = $resultado;
    }
    else if($formadecalcular == "x"){
        $resultado = $numero01 * $numero02;
        document.getElementById("resultado").innerText = $resultado;
    }
    else if($formadecalcular == "/"){
        $resultado = $numero01 / $numero02;
        document.getElementById("resultado").innerText = $resultado;
    }
    else if($formadecalcular == "%"){
        $resultado = $numero01 % $numero02;
        document.getElementById("resultado").innerText = $resultado;
    }
    else{
        alert("A forma de calcular não foi colocada");
    }
}