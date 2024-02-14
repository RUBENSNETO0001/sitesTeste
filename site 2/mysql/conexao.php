<?php 
$nome_servidor = "localhost";
$usuario = "root";
$senha ="";
$db_nome = "pandaweb";

try{
   $conexao = new mysqli($nome_servidor, $usuario , $senha , $db_nome);
    echo "deu bom";
}
    
  catch(Exception $e){
  echo 'deu pau'.$e ->getMessage();
  }
  ?>
