<?php
session_start();
$usuarioLogado = isset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Área dos Adultos</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <script>
    function mostrarJogo(tipo) {
      const conteudo = document.getElementById("conteudo");
      const botoes = document.querySelectorAll(".sidebar button");
      botoes.forEach(btn => btn.classList.remove("active"));
      document.getElementById("btn-" + tipo).classList.add("active");

      let html = "";
      if (tipo === "jogo1") {
        html = `<iframe src="jogos/TCC_Pou/index.html" width="800" height="600" style="border:none;"></iframe>`;
      } else if (tipo === "jogo2") {
        html = ``;
      } else if (tipo === "jogo3") {
        html = `
          
        `;
      }

      conteudo.innerHTML = html;
    }

    window.onload = () => {
      mostrarJogo("jogo1");
    };
  </script>
</head>
<body class="pagina-jogos">
  <header>
    <nav class="navbar">
      <div class="logo"><img src="img/Imagem rim.png" class="img_navbar"></div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="ebook.html">EBook</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
      <div class="botoes">
        <?php if ($usuarioLogado): ?>
          <a href="perfil.php" class="btn perfil"><img src="img/IconeCL.png" class="img_pessoa"> Perfil</a>
          <a href="logout.php" class="btn sair">Sair</a>
        <?php else: ?>
          <a href="login.html" class="btn entrar"><img src="img/IconeCL.png" class="img_pessoa"> Entrar</a>
          <a href="cadastro.html" class="btn cadastrar"><img src="img/IconeCL.png" class="img_pessoa"> Cadastrar</a>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <div class="container-geral">
    <div class="sidebar">
      <button id="btn-jogo1" onclick="mostrarJogo('jogo1')">Jogo 1</button>
      <button id="btn-jogo2" onclick="mostrarJogo('jogo2')">Jogo 2</button>
      <button id="btn-jogo3" onclick="mostrarJogo('jogo3')">Jogo 3</button>
      
    </div>
    <div class="conteudo" id="conteudo"></div>
  </div>
</body>
</html>
