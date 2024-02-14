<?php 
$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$db_servidor = "portuweb";

try {
    $conexao = new mysqli($nome_servidor, $usuario, $senha, $db_servidor);
    
} catch (Exception $e) {
    echo 'Ocorreu um erro de conexão: ' . $e->getMessage();
}
?>

