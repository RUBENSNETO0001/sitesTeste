<?php
session_start();
?>
<script>
  function voltar() {
    window.history.back();
  }
</script>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/desing_isui.css">
  <link rel="shortcut icon" href="FAVICON/panda.jpg" type="image/x-icon">
  <title>Document</title>
</head>
<body>
  <header>
    <form id="inicio01">
      <h3 id="nome_site">PortuWeb</h3>
      <a onclick="voltar()" id="voltar">voltar</a>
    </form>

    <form id="lobbasic">
      <img src="IMG/Imagem do WhatsApp de 2023-10-12 à(s) 13.04.54_6b921086.jpg" alt="">

      <div id="nome">
        <h2>Obra:</h2>
        <h2 id="nomedaobra"> Isui, a sombra da alma.</h2>
      </div>
    </form>

    <div id="descricao">
      <h3>Descrição:</h3>
      <h4 id="descrisui">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quos odio mollitia sunt eum soluta nobis, inventore praesentium saepe cum laudantium eos. Quod nam enim ea porro illum placeat reiciendis.</h3>
    </div>

    <form id="capitulos">
      <h3>Categoria:</h3>

      <button type="button" class="btn btn-outline-light" id="categoria01">SHOUNEN</button>
      <button type="button" class="btn btn-outline-light" id="categoria01">GEKIGÁ</button>
      <button type="button" class="btn btn-outline-light" id="categoria01">SEINEN</button>
      <button type="button" class="btn btn-outline-light" id="categoria01">YOKAI</button>
      <button type="button" class="btn btn-outline-light" id="categoria01">ISEKAI</button>
    </form>

    <div id="autor">
      <h3>Autor:</h3>
      <h4 id="auro">Ruren</h4>
    </div>

    <form id="comentario">
      <h3 id="cn">Comentario:</h3>
      <input name="comentario" id="comenti"></input>
    </form>
    <nav>
      <div id="mensagens">
    <a href="comentario/comentarios.php"id="mensagem_03"><h4 >ver comentarios </h4></a> 
     
      </div>
    </nav>

  </header>
  <main>

    <form id="caps">
      <a href="pagina_cap_imagensIsui.php">Capitulo 01: Isui.</a>
      <a href="#">Capitulo 02: ...</a>
      <a href="#">Capitulo 03: ...</a>
    </form>

  </main>
</body>
</html>