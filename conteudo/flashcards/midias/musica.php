<?php
session_start();

if (!isset($_SESSION['usuario_id'])){
    header("Location: ../../login/login.php");
    exit();
}

$nomeUsuario = $_SESSION['usuario_nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Música</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../../barra.css">
<link rel="stylesheet" href="../../geral.css">
<link rel="stylesheet" href="../../../header.css">
<link rel="stylesheet" href="musica.css">
</head>
<body>
<header class="header">
    <div class="header-container">
        <div class="logo-area">
            <h1 class="titulo-header">Música</h1>
        </div>
        <div class="usuario-area">
            <span class="boas-vindas">Olá, <?php echo $nomeUsuario; ?> 👋</span>
            <a href="../../../login/logout.php" class="btn-logout">
                <i class="bi bi-box-arrow-right"></i> Sair
            </a>
        </div>
    </div>
</header>

<nav class="menu-lateral">
    <div class="imagem">
        <img src="../../imagens/logo2.png" alt="logo" id="logo">
    </div>
    <div class="btn-expandir">
        <i class="bi bi-list" id="btn-exp"></i>
    </div>
    <ul>
        <li class="item-menu">
            <a href="../../home/home.php"><span class="icon"><i class="bi bi-house-fill"></i></span><span class="txt-link">Home</span></a>
        </li>
        <li class="item-menu">
            <a href="../../cronograma/cronograma.php"><span class="icon"><i class="bi bi-calendar-check-fill"></i></span><span class="txt-link">Cronograma</span></a>
        </li>
        <li class="item-menu">
            <a href="../../disciplinas/disciplinas.php"><span class="icon"><i class="bi bi-book-half"></i></span><span class="txt-link">Disciplinas</span></a>
        </li>
        <li class="item-menu">
            <a href="../../informacoes/informacoes.php"><span class="icon"><i class="bi bi-info-circle-fill"></i></span><span class="txt-link">Informações</span></a>
        </li>
        <li class="item-menu ativo">
            <a href="../flashcards.php"><span class="icon"><i class="bi bi-mortarboard-fill"></i></span><span class="txt-link">Cultura</span></a>
        </li>
        <li class="item-menu">
            <a href="../../perfil/perfil.php"><span class="icon"><i class="bi bi-person-bounding-box"></i></span><span class="txt-link">Meu Perfil</span></a>
        </li>
    </ul>
</nav>

<div class="conteudo">
<section class="section">

    <!-- INTRO -->
    <div class="intro-musica">
        <h2>A Trilha da História</h2>
        <p>Descubra os discos e sons que transformaram a música mundial — do grunge cru ao samba poético, do jazz introspectivo às sinfonias eternas.</p>
    </div>

    <!-- GÊNERO: ROCK -->
    <div class="genero bloco-rock">
        <h3><i class="bi bi-lightning-charge-fill"></i> Rock</h3>
        <div class="musicas-container">

            <a href="https://www.youtube.com/watch?v=MNMqyrhPrXY&list=PLprWPkGKlj_SabgOi8mflYlRhzeA8gTpT&index=1" target="_blank" class="musica-card">
                <img src="images/dirt.jpg" alt="dirt">
                <h4> Alice In Chains — Dirt  </h4>
                <p>O som cru e visceral que redefiniu o grunge.</p>
            </a>

            <a href="https://youtu.be/rQbOoUmhSPo?si=Y0Y6HQ39XPly3Hey" target="_blank" class="musica-card">
                <img src="images/thewall.jpg" alt="The Wall">
                <h4>Pink Floyd — The Wall</h4>
                <p>Uma ópera rock sobre isolamento e crítica social.</p>
            </a>

            <a href="https://youtu.be/kfSQkZuIx84?si=z0N8xGwEr7SBvOpn" target="_blank" class="musica-card">
                <img src="images/rubbersoul.jpg" alt="Rubber Soul">
                <h4>Beatles — Rubber Soul</h4>
                <p>O amadurecimento criativo dos Beatles em plena forma.</p>
            </a>

            <a href="https://youtu.be/UbNDLB0-zMQ?si=ma-jFwCBIWGeLFY5" target="_blank" class="musica-card">
                <img src="images/dois.jpg" alt="Dois - Legião Urbana">
                <h4>Legião Urbana — Dois</h4>
                <p>A melancolia poética de uma geração brasileira.</p>
            </a>
        </div>
    </div>

    <!-- MPB -->
    <div class="genero bloco-mpb">
        <h3><i class="bi bi-music-note-beamed"></i> MPB</h3>
        <div class="musicas-container">

            <a href="https://youtu.be/djb9np-w1d8?si=GRkgXkqEQ61lxTiz" target="_blank" class="musica-card">
                <img src="images/erasmo.jpg" alt="Carlos, Erasmo">
                <h4> Erasmo Carlos - Carlos, Erasmo </h4>
                <p> Um álbum repleto de grandes clássicos da música nacional. </p>
            </a>

            <a href="https://www.youtube.com/watch?v=eApXuej38f8&list=PLItd1GiqTiJQc5iPzFyDDHaLxcU7e3nGN&index=1" target="_blank" class="musica-card">
                <img src="images/construcao.jpg" alt="Construção">
                <h4>Chico Buarque — Construção</h4>
                <p>Um dos álbuns mais poéticos da música brasileira.</p>
            </a>

            <a href="https://www.youtube.com/watch?v=dZ_6_aAMbFc&list=PLZv6xnm6clDawCIJOV2BJujFphv6xp5rM&index=1" target="_blank" class="musica-card">
                <img src="images/inedito.jpg" alt="Inédito">
                <h4> Tom Jobim — Inédito </h4>
                <p> Uma obra prima lírica e musical. </p>
            </a>

            <a href="https://youtu.be/GGmGMEVbTAY?si=70rspWuhVladk7lo" target="_blank" class="musica-card">
                <img src="images/clube.jpg" alt="Clube da Esquina">
                <h4>Milton Nascimento — Clube da Esquina</h4>
                <p>Um marco poético e sonoro de Minas Gerais.</p>
            </a>
        </div>
    </div>

    <!-- CLÁSSICA -->
    <div class="genero bloco-classica">
        <h3><i class="bi bi-vinyl-fill"></i> Música Clássica</h3>
        <div class="musicas-container">

            <a href="https://www.youtube.com/watch?v=t3217H8JppI" target="_blank" class="musica-card">
                <img src="images/bethoven.jpg" alt="Beethoven 9">
                <h4>Beethoven — Sinfonia nº9</h4>
                <p>Uma exaltação à humanidade e liberdade.</p>
            </a>

            <a href="https://www.youtube.com/watch?v=sPlhKP0nZII" target="_blank" class="musica-card">
                <img src="images/mozart.jpg" alt="Mozart Requiem">
                <h4>Mozart — Requiem</h4>
                <p>Obra inacabada que ecoa mistério e genialidade.</p>
            </a>

            <a href="https://youtu.be/fL3rH0tCsJg?si=k5TLwP2qFJWTuUi4" target="_blank" class="musica-card">
                <img src="images/villalobos.jpg" alt="Bachianas Brasileiras">
                <h4>Villa-Lobos — Bachianas Brasileiras</h4>
                <p>O erudito europeu unido ao espírito do Brasil.</p>
            </a>

            <a href="https://youtu.be/9E6b3swbnWg?si=2pOzD-1NUSCPUMyk" target="_blank" class="musica-card">
                <img src="images/chopin.jpg" alt="Chopin Nocturnes">
                <h4>Chopin — Nocturnes</h4>
                <p>Melodias introspectivas e poéticas do piano romântico.</p>
            </a>
        </div>
    </div>

</section>
</div>

<script src="../../menu.js"></script>
</body>
</html>
