<?php
$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$db_servidor = "portuweb";


$conexao = new mysqli($nome_servidor, $usuario, $senha, $db_servidor);

if ($conexao->connect_error) {
    die("deu error" . $conexao->connect_error);
}
// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $comentario = $_POST['comentario'];

    // Inserindo o comentário na tabela
    $sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$nome', '$comentario')";

    if ($conexao->query($sql) === TRUE) {
        echo "Comentário adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar comentário: " . $conexao->error;
    }
}

$conexao->close();
