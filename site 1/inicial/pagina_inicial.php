<?php
session_start();
?>
<script>
    let button = document.querySelector('#login_user');

    button.addEventListener('click', entrar);

    function entrar() {
        if (true) {
            window.location.href = 'login.php';
        }
    }
</script>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="FAVICON/panda.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>sala</title>
    <link rel="stylesheet" href="CSS/desing_pagina01.css">
    <style>
        body {
            background-color: rgb(19, 19, 19);
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <form id="inicio">
            <h3>PortuWeb</h3>
        </form>
    </header>
    <br>
    <main>
        <form id="form01"><a href="pagina_tudo.php">+mais</a></form>
        <form id="form02">
            <div class="two-color-div">
                <a href="pagina_isui01.php" id="imagem01">
                    <img src="IMG/Imagem do WhatsApp de 2023-10-12 à(s) 13.04.54_6b921086.jpg" id="capa"></a>
                <a href="pagina_isui01.php" class="hover-link">Isui, a sombra da alma</a>
        </form>
    </main>
    <div>
        <img src="https://i.gifer.com/WG8T.gif" id="panda">
    </div>
</body>

</html>