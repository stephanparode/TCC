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
    <title>Document</title>
    <link rel="stylesheet" href="../barra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../geral.css">
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="style.css"
</head>
<body>
     <header class="header">
        <div class="header-container">
            <div class="logo-area">
                <h1 class="titulo-header"> Cultura & Saber </h1>
            </div>
            <div class="usuario-area">
                <span class="boas-vindas">Olá, <?php echo $nomeUsuario; ?> 👋</span>
                <a href="../../login/logout.php" class="btn-logout">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>
        </div>
    </header>
    <nav class="menu-lateral">
        
         <div class="imagem">
            <img src="../imagens/logo2.png" alt="logo" id="logo">
        </div>
        
        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="../home/home.php">
                    <span class="icon"> <i class="bi bi-house-fill"></i> </span>
                    <span class="txt-link"> Home </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../cronograma/cronograma.php">
                    <span class="icon"> <i class="bi bi-calendar-check-fill"></i> </span>
                    <span class="txt-link"> Cronograma </span>
                </a>
            </li>
            
            <li class="item-menu">
                <a href="../disciplinas/disciplinas.php">
                    <span class="icon"><i class="bi bi-book-half"></i></span>
                    <span class="txt-link"> Disciplinas </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../informacoes/informacoes.php">
                    <span class="icon"> <i class="bi bi-info-circle-fill"></i> </span>
                    <span class="txt-link"> Informações </span>
                </a>
            </li>

            <li class="item-menu ativo">
                <a href="#">
                    <span class="icon"> <i class="bi bi-mortarboard-fill"></i></span>
                    <span class="txt-link"> Cultura  </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../perfil/perfil.php">
                    <span class="icon"><i class="bi bi-person-bounding-box"></i></span>
                    <span class="txt-link"> Meu Perfil </span>
                </a>
            </li>

        </ul>
    </nav>
    <div class="conteudo">
          <div class="citacao">
            <img src="images/freire.jpg" alt="paulo freire">
            <div class="texto"><p> <span class="aspas">"</span> A cultura como o acrescentamento que o homem faz ao mundo que não fez. A cultura  como o resultado de seu trabalho. Do seu esforço criador e recriador.<span class="aspas" id="vg2">" </span> </p>
            <p class="autor"> - Paulo Freire </p></div>
        </div>
        <section class="section">
            <div class="cultura">
                <h1> Enriqueça seu repertório cultural com o Planejaí! </h1>
            </div>
        </section>
        <div class="midias"> 
            <a href="midias/cinema.php">
            <div class="categoria" id="cinema"> 
                <i class="bi bi-camera-reels"></i>
                <h1> Cinema </h1>
            </div>
            </a>
            <a href="midias/literatura.php">
            <div class="categoria" id="literatura"> 
                <i class="bi bi-book"></i>
                <h1> Literatura </h1>
            </div>
            </a>
            <a href="midias/musica.php">
             <div class="categoria" id="musica"> 
                <i class="bi bi-music-note-beamed"></i>
                <h1> Música </h1>
            </div>
            </a>
            <a href="midias/artes.php">
            <div class="categoria" id="artes"> 
                <i class="bi bi-image"></i>
                <h1> Artes visuais </h1>
            </div>
            </a>
        </div>
        <!-- NOVA SEÇÃO DE DESTAQUES -->
<section class="destaques">
    <h2>Destaques da Cultura</h2>
    <div class="cards-destaques">
        <div class="card">
            <h3>Filme em destaque</h3>
            <p>“O Lobo Atrás da Porta” – Um romance nacional amplamente aclamado.</p>
        </div>
        <div class="card">
            <h3>Livro recomendado</h3>
            <p>“1984”, de George Orwell – reflexão sobre liberdade e sociedade.</p>
        </div>
        <div class="card">
            <h3>Artista do mês</h3>
            <p>Frida Kahlo – descubra a vida e obra da pintora mexicana.</p>
        </div>
    </div>
</section>

        
    </div>
    <script src="../menu.js"></script>

</body>
</html>