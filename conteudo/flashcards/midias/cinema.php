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
    <title> Cinema </title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../../../header.css">
    <link rel="stylesheet" href="cinema.css">
</head>
<body>
     <header class="header">
        <div class="header-container">
            <div class="logo-area">
                <h1 class="titulo-header"> Cinema </h1>
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
                <a href="../../home/home.php">
                    <span class="icon"> <i class="bi bi-house-fill"></i> </span>
                    <span class="txt-link"> Home </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../../cronograma/cronograma.php">
                    <span class="icon"> <i class="bi bi-calendar-check-fill"></i> </span>
                    <span class="txt-link"> Cronograma </span>
                </a>
            </li>
            
            <li class="item-menu">
                <a href="../../disciplinas/disciplinas.php">
                    <span class="icon"><i class="bi bi-book-half"></i></span>
                    <span class="txt-link"> Disciplinas </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../../informacoes/informacoes.php">
                    <span class="icon"> <i class="bi bi-info-circle-fill"></i> </span>
                    <span class="txt-link"> Informações </span>
                </a>
            </li>

            <li class="item-menu ativo">
                <a href="../flashcards.php">
                    <span class="icon"> <i class="bi bi-mortarboard-fill"></i></span>
                    <span class="txt-link"> Cultura  </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../../perfil/perfil.php">
                    <span class="icon"><i class="bi bi-person-bounding-box"></i></span>
                    <span class="txt-link"> Meu Perfil </span>
                </a>
            </li>

        </ul>
    </nav>
    <div class="conteudo">
        <section class="section">
            <div class="slider">
                <div class="slides">

                    <input type="radio" name="btn-radio" id="radio1">
                    <input type="radio" name="btn-radio" id="radio2">
                    <input type="radio" name="btn-radio" id="radio3">
                    <input type="radio" name="btn-radio" id="radio4">
        
                    <div class="slide first">
    <img src="images/lawrence.jpg" alt="lawrence of arabia">
    <div class="slide-text">
        <h2>Lawrence da Arábia (1962)</h2>
        <p>O oficial britânico T.E. Lawrence é enviado ao deserto árabe para unir tribos contra o Império Otomano. Entre estratégias militares e conflitos pessoais, Lawrence enfrenta a imensidão do deserto e sua própria transformação.</p>
    </div>
</div>

<div class="slide">
    <img src="images/2001.jpg" alt="2001: Uma Odisseia no Espaço">
    <div class="slide-text">
        <h2>2001: Uma Odisseia no Espaço (1968)</h2>
        <p>Stanley Kubrick entrega um épico de ficção científica, explorando a evolução humana, inteligência artificial e os mistérios do cosmos de maneira visualmente impressionante.</p>
    </div>
</div>

<div class="slide">
    <img src="images/malcolm.jpg" alt="Malcolm X">
    <div class="slide-text">
        <h2>Malcolm X (1992)</h2>
        <p>Spike Lee retrata a vida e a luta do ativista afro-americano Malcolm X, abordando questões de racismo, identidade e direitos civis nos Estados Unidos do século XX.</p>
    </div>
</div>

<div class="slide">
    <img src="images/loboatras.jpg" alt="Lobo Atrás da Porta">
    <div class="slide-text">
        <h2> Lobo Atrás da Porta (2013)</h2>
        <p>Um thriller psicológico brasileiro que mergulha em traições e segredos, mostrando como paixões, mentiras e vingança podem se tornar armas perigosas em uma trama intensa e imprevisível.</p>
    </div>
</div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="manual-navigation"> 
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
            <section class="intro-cinema">
    <div class="intro-container">
        <h2>Descubra Filmes Clássicos</h2>
        <p>Explore nossa seleção de filmes clássicos, desde obras-primas do cinema nacional até referências internacionais. Navegue pelos cards abaixo e clique em cada filme para mais informações.</p>
    </div>
</section>
<section class="cards-cinema">
    <h2>Recomendações </h2>
    <p>Explore nossa seleção de filmes clássicos e internacionais.</p>
    <div class="cards-container">
        <a href="https://youtu.be/qlk6ussFvUM?si=jciHoelXYIDVN4zc" target="_blank">
         <div class="card">
            <img src="images/lawrenceposter.jpg" alt="Lawrende da Arábia">
            <div class="selo">Disponível</div>
            <div class="card-info">
                <h3> Lawrence da Arábia </h3>
                <p>O oficial britânico T.E. Lawrence é enviado ao deserto árabe para unir tribos contra o Império Otomano </p>
                </a>
            </div>
        </div>

        <a href="">
         <div class="card">
            <img src="images/2001poster.jpg" alt="2001: Uma Odisséia no Espaço">
            <div class="card-info">
                <h3> 2001: Uma Odisséia no Espaço </h3>
                <p>Stanley Kubrick entrega um épico de ficção científica, explorando a evolução humana, inteligência artificial e os mistérios do cosmos de maneira visualmente impressionante. </p>
            </div>
        </div>
        </a>


         <div class="card">
            <img src="images/loboposter.jpg" alt="O Lobo Atrás da Porta">
            
            <div class="card-info">
                <h3> Lobo Atrás da Porta </h3>
                <p>Um thriller psicológico brasileiro que mergulha em traições e segredos, mostrando como paixões, mentiras e vingança podem se tornar armas perigosas em uma trama intensa e imprevisível. </p>
            </div>
        </div>
         <div class="card">
            <a href="">
            <img src="images/malcolmposter.jpg" alt="Malcolm X">
            <div class="selo">Disponível</div>
            <div class="card-info">
                <h3> Malcolm X </h3>
                <p>Spike Lee retrata a vida e a luta do ativista afro-americano Malcolm X, abordando questões de racismo, identidade e direitos civis nos Estados Unidos do século XX. </p>
            </div>
               </a>
        </div>

        <div class="card">
            <img src="images/vertigo.jpg" alt="Vertigo">
            <div class="card-info">
                <h3>Vertigo</h3>
                <p>Alfred Hitchcock explora obsessão, identidade e mistério nesse thriller psicológico icônico.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/poetas.jpg" alt="Sociedade dos Poetas Mortos">
            <div class="card-info">
                <h3>Sociedade dos Poetas Mortos</h3>
                <p>Inspirador drama que celebra a poesia, liberdade e coragem em um internato conservador.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/barrylyndon.jpg" alt="Barry Lyndon">
            <div class="card-info">
                <h3>Barry Lyndon</h3>
                <p>Stanley Kubrick narra a ascensão e queda de um ambicioso aventureiro no século XVIII.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/psicose.jpg" alt="Psicose">
            <div class="card-info">
                <h3>Psicose</h3>
                <p>Suspense clássico de Hitchcock que redefine o terror psicológico no cinema.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/nomearosa.jpg" alt="O Nome da Rosa">
            <div class="card-info">
                <h3>O Nome da Rosa</h3>
                <p>Mistério medieval que combina suspense, filosofia e assassinatos em um mosteiro.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/treshomens.jpg" alt="Três Homens em Conflito">
            <div class="card-info">
                <h3>Três Homens em Conflito</h3>
                <p>Western épico de Sergio Leone, com clima tenso e trilha sonora inesquecível de Ennio Morricone.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/fullmetal.jpg" alt="Full Metal Jacket">
            <div class="card-info">
                <h3>Full Metal Jacket</h3>
                <p>Kubrick apresenta a brutalidade da guerra do Vietnã e a transformação de jovens soldados.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/sonhodeliberdade.jpg" alt="Um Sonho de Liberdade">
            <div class="card-info">
                <h3>Um Sonho de Liberdade</h3>
                <p>Drama emocionante sobre esperança, amizade e resiliência dentro de uma prisão.</p>
            </div>
        </div>
    </div>
</section>
<section class="destaques-cinema">
    <h2>Clássicos do Cinema Nacional</h2>
    <p>Explore obras-primas do cinema brasileiro, que marcaram época e influenciaram gerações.</p>
    <div class="destaques-container">
        <a href="https://youtu.be/DAPs2Jw6R3k?si=8GQi6Scw3qQCFStv" target="_blank" class="destaque-card">
            <img src="images/cabramarcado.jpg" alt="Cabra Marcado Para Morrer">
            <div class="selo">Disponível</div>
            <div class="destaque-info">
                <h3>Cabra Marcado Para Morrer</h3>
                <p>Documentário icônico que mistura realidade e ficção para retratar a luta de camponeses no Brasil.</p>
            </div>
        </a>
        <a href="https://youtu.be/OqgnXHvy9L0?si=YlFI9gGTTV5iK4CE" target="_blank" class="destaque-card">
            <img src="images/terraemtranse.jpg" alt="Terra em Transe">
            <div class="selo">Disponível</div>
            <div class="destaque-info">
                <h3>Terra em Transe</h3>
                <p>Glauber Rocha explora política, corrupção e crises sociais com narrativa poética e intensa.</p>
            </div>
        </a>
        <a href="https://youtu.be/dmxJQ-_kXi4?si=VebIIFofBNK_lU1bc" target="_blank" class="destaque-card">
            <img src="images/riozonanorte.jpg" alt="Rio: Zona Norte">
            <div class="selo">Disponível</div>
            <div class="destaque-info">
                <h3>Rio: Zona Norte</h3>
                <p>Obra que retrata a vida de jovens na cidade do Rio de Janeiro com sensibilidade e crítica social.</p>
            </div>
        </a>
        <a href="https://youtu.be/F96Frw8Rx9A?si=zMk36LcLx1sq_3NU" target="_blank" class="destaque-card">
            <img src="images/dragao.jpg" alt="O Dragão da Maldade contra o Santo Guerreiro">
            <div class="selo">Disponível</div>
            <div class="destaque-info">
                <h3>O Dragão da Maldade contra o Santo Guerreiro</h3>
                <p>Glauber Rocha mistura política, misticismo e imagens poéticas para refletir sobre a sociedade brasileira.</p>
            </div>
        </a>
    </div>
</section>

        </section>
        
    </div>
    <script src="../../menu.js"></script>
    <script src="slider.js"></script>
</body>
</html>