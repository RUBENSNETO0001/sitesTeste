<?php
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'], $_POST['email'], $_POST['senha'])) {

        $nome = trim(strip_tags($_POST['name']));
        $email = trim(strip_tags($_POST['email']));
        $senha = trim(strip_tags($_POST['senha']));

        if (empty($nome) || empty($email) || empty($senha)) {
            $error[] = 'Preencha todos os campos.';
        }

          elseif (empty($nome)) {
            $error[] = 'Nome está vazio.';
        } elseif (empty($email)) {
            $error[] = 'Email está vazio.';
        } elseif (empty($senha)) {
            $error[] = 'Senha está vazia.';
        }

        if (strlen($nome) < 4) {
            $error[] = 'Nome não pode ter menos de 4 caracteres.';
        }
        if (strlen($senha) < 6) {
            $error[] = 'Senha não pode ter menos de 6 caracteres.';
        }
        if (preg_match('/\d/', $nome)) {
            $error[] = 'Nome não pode conter números.';
        }//preg_martch identificador de numero , basicamente indentificar e nao deixa.

        if (count($error) == 0) {
            header('Location: tudo/pagina_principal.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style01.css">
    <title>Login</title>
</head>

<body> 
    
    <form action="" method="post" id="formulario">
        <header>
            <p id="login_logo">Login</p>
        </header>
        <nav id="navin">
            <label class="yan">Nome</label>
            <input type="text" placeholder="Nome" class="inpu" name="name">

            <label class="yan">Email</label>
            <input type="email" placeholder="Email" class="inpu" name="email">

            <label class="yan">Senha</label>
            <input type="password" placeholder="Senha" class="inpu" name="senha">
        </nav>
        <button type="submit" id="buttun">Entrar</button>
    </form>

     <div>
        <img src="img/—Pngtree—cartoon woman character design work_9053061.png" alt="Mulher no computador" id="imagem01">
            </div>
<div id="in">
<?php if (count($error) > 0) : ?>
        <ul>
            <?php foreach ($error as $erro) : ?>
                <div><p id="error_mensage"><?php echo $erro; ?></p></div>
               
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
</body>
</html>