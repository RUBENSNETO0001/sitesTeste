<?php

session_start();

$_SESSION = 

$erros = [];

if (isset($_POST['senha'], $_POST['email'])) {

    $senha = trim(strip_tags($_POST['senha']));
    $email = trim(strip_tags($_POST['email']));

    if (empty($senha) || empty($email)) {
        $erros[] = "  Erros no formulario: ";
    }

    if (strlen($senha) < 6) {
        $erros[] = "A senha precisa ter no mínimo 8 caracteres.";
    }

    if (strlen($email) < 5) { // Corrija o comprimento mínimo do email.
        $erros[] = "O email precisa ter no mínimo 5 caracteres.";
    }

    if (count($erros) == 0) {
        header('Location: inicial/pagina_inicial.php');
        exit; // Adicione um exit para encerrar o script após o redirecionamento.
    }
}
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_login/desing_login.css">
    <link rel="shortcut icon" href="FAVICON/panda.jpg" type="image/x-icon">
    <title>login-PHP</title>

</head>

<body>
    <div id="logo">
        <h3 id="nomelogo" >PortuWeb</h3>
    </div>

    <form method="POST">

        <h3>Senha
            <input type="password" name="senha" placeholder="ex: carlos2003">
        </h3>

        <h3>Email
            <input type="email" name="email" placeholder="ex: Carla0olind0@gmail.com">
        </h3>

        <button type="submit">Enviar</button>
        <nav>
            <h5>caso não tenha se <a href="registro.php" id="regin"><strong>registrado</strong></a></h5>
        </nav>

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