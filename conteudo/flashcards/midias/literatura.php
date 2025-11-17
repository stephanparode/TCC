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
<title>Literatura</title>
<link rel="stylesheet" href="../../barra.css">
<link rel="stylesheet" href="../../geral.css">
<link rel="stylesheet" href="../../../header.css">
<link rel="stylesheet" href="literatura.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
<header class="header">
    <div class="header-container">
        <div class="logo-area">
            <h1 class="titulo-header">Literatura</h1>
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
        <div class="intro-literatura">
            <h2>Explore a Literatura Clássica</h2>
            <p>Conheça os grandes períodos literários e autores que marcaram a história, do Brasil ao mundo, priorizando obras em domínio público e essenciais para qualquer leitor.</p>
        </div>


        <div class="periodos-container">
            <div class="periodo-card">
                <h3>Classicismo</h3>
                <p>Séculos XVI-XVII, foco em equilíbrio, racionalidade e harmonia, com autores como Camões.</p>
            </div>
            <div class="periodo-card">
                <h3>Romantismo</h3>
                <p>Século XIX, valorização da emoção e natureza, com autores nacionais como José de Alencar.</p>
            </div>
            <div class="periodo-card">
                <h3>Realismo</h3>
                <p>Século XIX, foco em sociedade e crítica social, com Machado de Assis e Flaubert.</p>
            </div>
            <div class="periodo-card">
                <h3>Modernismo</h3>
                <p>Início do século XX, inovação formal e estética nacional, com Mário de Andrade e Oswald de Andrade.</p>
            </div>
        </div>


        <div class="cards-literatura">
            <h2>Obras Disponíveis </h2>
            <div class="cards-container">

            <a href="https://itaudeminas.mg.gov.br/arquivos/ere/livros/Dom-Quixote-Miguel-de-Cervantes.pdf" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/domquixote.jpg" alt="Dom Quixote">
                        <h3>Dom Quixote</h3>
                        <p>Miguel de Cervantes, romance de sátira social e aventuras cômicas.</p>
                    </div>
            </a>
                </div>
            <a href="https://www.ebooksbrasil.org/adobeebook/noitesbrancas.pdf" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/noitesbrancas.jpg" alt="Noites Brancas">
                        <h3> Noites Brancas </h3>
                        <p> Fyodor Dostoiévski, romance melancólico que marcou época na literatura russa. </p>
                    </div>
                </div>
            </a>
            <a href="https://bibliotecamundial.com.br/frankenstein-ou-o-prometeu-moderno-mary-shelley" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/frankenstein.jpg" alt="Frankenstein">
                        <h3>Frankenstein</h3>
                        <p>Mary Shelley, clássico de ficção científica e horror gótico.</p>
                    </div>
                </div>
            </a>
            <a href="https://sites.usp.br/fabulacoesdafamiliabrasileira/wp-content/uploads/sites/1073/2022/06/Liev-Tolstoi-A-Morte-de-Ivan-Ilitch.pdf" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/ivan.jpg" alt="A Morte de Ivan Ilitch">
                        <h3> A Morte de Ivan Ilitch </h3>
                        <p> Lev Tolstói, romance filosófico que levanta reflexões sobre a vida e a morte. </p>
                    </div>
                </div>
            </a>
            <a href="https://site-antigo-2025.uffs.edu.br/institucional/reitoria/editora-uffs/repositorio-de-e-books/memorias-postuma-de-bras-cubas-pdf" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/brascubas.jpg" alt="Memórias Póstumas de Brás Cubas">
                        <h3>Memórias Póstumas de Brás Cubas</h3>
                        <p>Machado de Assis, romance inovador com ironia e crítica social.</p>
                    </div>
                </div>
            </a>
            <a href="https://www.ebooksbrasil.org/adobeebook/policarpoE.pdf" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/policarpo.jpg" alt="Triste Fim de Policarpo Quaresma">
                        <h3> Triste Fim de Policarpo Quaresma </h3>
                        <p> Lima Barreto, retrato da derradeira queda do patriotismo ufanista de Policarpo. </p>
                    </div>
                </div>
            </a>
            <a href="https://fundar.org.br/wp-content/uploads/2021/06/os-sertoes.pdf" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/sertoes.jpg" alt="Os Sertões">
                        <h3> Os Sertões  </h3>
                        <p> Euclides da Cunha, ilustração dos eventos ocorridos em Canudos durante a República Velha. </p>
                    </div>
                </div>
            </a>
            <a href="http://www.culturatura.com.br/obras/iracema.pdf" target="_blank">
                <div class="card">
                    <div class="card-info">
                        <img src="images/iracema.jpg" alt="">
                        <h3>Iracema</h3>
                        <p>José de Alencar, romance romântico com valorização do indígena e da natureza.</p>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </section>
</div>

<script src="../../menu.js"></script>
</body>
</html>
