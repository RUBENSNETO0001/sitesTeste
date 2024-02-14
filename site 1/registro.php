<body>
    <link rel="shortcut icon" href="FAVICON/panda-svgrepo-com.svg" type="image/x-icon">
</body>
<?php
session_start();

$erros = [];
include "PHP/banco_dados_user.php";

if (isset($_POST['nome'], $_POST['senha'], $_POST['email'])) {
    $nome = trim(strip_tags($_POST['nome']));
    $senha = trim(strip_tags($_POST['senha']));
    $email = trim(strip_tags($_POST['email']));

    if (empty($nome) || empty($senha) || empty($email)) {
        $erros[] = "  Erros no formulario: ";
    }

    if (strlen($senha) < 6) {
        $erros[] = "A senha precisa ter no mínimo 6 caracteres.";
    }

    
    if (strlen($email) < 5) { // Corrija o comprimento mínimo do email.
        $erros[] = "O email precisa ter no mínimo 5 caracteres.";
    }

    if (strlen($email) ) { // Corrija o comprimento mínimo do email.
        $erros[] = "O email precisa ter no mínimo 5 caracteres.";
    }

    if (strlen($nome) < 3) {
        $erros[] = "O nome não pode ter menos que 3 caracteres."; // Corrija o comprimento mínimo do nome.
    }

    if (count($erros) == 0) {

        $dados_user = $conexao->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
        $dados_user->bind_param("sss", $nome, $email, $senha);
        $dados_user->execute();
        $dados_user->close();

        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_login/desing_register.css">
    <title>registro-PHP</title>

</head>

<body>
    <div id="logo">
        <h3 id="nomelogo">PortuWeb</h3>
    </div>

    <form method="POST" >

        <h3>Nome completo
            <input type="text" name="nome" placeholder="ex: Carlos Eduardo Silva dos Santos" >
        </h3>

        <h3>Senha
            <input type="password" name="senha" placeholder="ex: carlos2003" class="inputs">
        </h3>

        <h3>Email
            <input type="email" name="email" placeholder="ex: Carla0olind0@gmail.com" >
        </h3>

        <button type="submit">Enviar</button>

        <?php if (count($erros) > 0) : ?>
            <ul>
                <?php foreach ($erros as $erro) : ?>
                    <h4 id="erros"><?php echo $erro; ?></h4>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </form>
    <div>
        <img src="https://i.gifer.com/ZcOc.gif" id="panda">
    </div>
</body>

</html>