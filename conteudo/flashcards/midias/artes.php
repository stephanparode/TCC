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
<title>Artes Visuais</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../../barra.css">
<link rel="stylesheet" href="../../geral.css">
<link rel="stylesheet" href="../../../header.css">
<link rel="stylesheet" href="artes.css">
</head>
<body>

<header class="header">
    <div class="header-container">
        <div class="logo-area">
            <h1 class="titulo-header">Artes Visuais</h1>
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

    <div class="intro-artes">
        <h2>Entre Cores e Formas</h2>
        <p>Da harmonia clássica do Renascimento às experimentações modernas, a arte sempre refletiu o espírito do tempo. Conheça os períodos e artistas que moldaram nossa visão estética do mundo.</p>
    </div>

    <div class="periodo">
        <h3><i class="bi bi-brush"></i> Renascimento</h3>
        <p>Marcado pelo equilíbrio e pela busca da perfeição, o Renascimento reviveu o pensamento clássico, colocando o ser humano no centro da criação.</p>

        <div class="artista">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg" alt="Mona Lisa">
            <div class="info">
                <h4>Leonardo da Vinci</h4>
                <p>Um dos maiores gênios da humanidade, Leonardo combinou ciência e arte. Obras como <strong>Mona Lisa</strong> e <strong>A Última Ceia</strong> são expressões do ideal humanista e da técnica impecável.</p>
            </div>
        </div>
    </div>

    <div class="periodo">
        <h3><i class="bi bi-droplet-half"></i> Barroco</h3>
        <p>O Barroco foi uma arte do contraste e da emoção. A luz e a sombra, o drama e o movimento, revelam a espiritualidade e o conflito humano.</p>

        <div class="artista">
            <img src="images/caravaggio.jpg" alt="Caravaggio">
            <div class="info">
                <h4>Caravaggio</h4>
                <p>Caravaggio introduziu o <em>chiaroscuro</em>, contraste entre luz e sombra que deu vida às suas figuras intensamente humanas, como em <strong>A Vocação de São Mateus</strong>.</p>
            </div>
        </div>
    </div>

    <div class="periodo">
        <h3><i class="bi bi-palette-fill"></i> Modernismo</h3>
        <p>No Brasil, o Modernismo uniu o folclore, a cultura popular e a vanguarda europeia. O resultado foi uma arte autenticamente nacional e inovadora.</p>

        <div class="artista">
            <img src="images/abaporu.jpg" alt="Abaporu - Tarsila do Amaral">
            <div class="info">
                <h4>Tarsila do Amaral</h4>
                <p>A artista modernista brasileira criou obras icônicas como <strong>Abaporu</strong>, símbolo do movimento antropofágico e da identidade cultural brasileira.</p>
            </div>
        </div>
    </div>

    <div class="periodo">
        <h3><i class="bi bi-stars"></i> Pós-Impressionismo</h3>
        <p>Após o Impressionismo, artistas passaram a expressar a emoção e a psicologia por meio da cor e do traço livre, abrindo caminho para o expressionismo.</p>

        <div class="artista">
            <img src="images/gogh.jpg" alt="Van Gogh - Noite Estrelada sobre o Ródano">
            <div class="info">
                <h4>Vincent van Gogh</h4>
                <p>Van Gogh canalizou sua intensidade emocional em cores vibrantes e pinceladas únicas. <strong>Noite Estrelada</strong> é um hino à sensibilidade humana.</p>
            </div>
        </div>
    </div>

    <div class="periodo">
        <h3><i class="bi bi-brush-fill"></i> Arte Contemporânea</h3>
        <p>A arte contemporânea rompe com os limites tradicionais, explorando novos materiais, conceitos e linguagens — refletindo as tensões e questionamentos do presente.</p>

        <div class="artista">
            <img src="images/tropicalia.jpg" alt="Tropicália - Hélio Oiticica">
            <div class="info">
                <h4>Hélio Oiticica</h4>
                <p>Com obras como <strong>Tropicália</strong>, Oiticica transformou a arte em experiência. Sua obra propõe a participação ativa do espectador e dialoga com a cultura brasileira.</p>
            </div>
        </div>
    </div>

    <div class="conclusao">
        <p>A arte é a memória visual da humanidade — o espelho da alma coletiva, que muda com o tempo, mas jamais perde sua essência.</p>
    </div>

</section>
</div>

<script src="../../menu.js"></script>
</body>
</html>
