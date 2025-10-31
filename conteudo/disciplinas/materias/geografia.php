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
    <title>Geografia</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE GEOGRAFIA ================= */
        .materia i {
            color: #f76707;
        }
        .estatisticas-container {
            background-color: #fff4e6;
            border-left: 5px solid #f76707;
        }
        .estatisticas-container h2 {
            color: #f55f00;
        }
        .estatistica-item h3 {
            color: #f76707;
        }
        .barra-preenchida {
            background-color: #f76707;
        }
    </style>
</head>
<body>
    <header>
        <h1>Geografia</h1>
        <nav>
            <a href="#geografia">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Geografia Física</a>
            <a href="#lista2">Geografia Humana</a>
            <a href="#lista3">Geopolítica</a>
            <a href="#lista4">Brasil</a>
            <a href="#lista5">Globalização</a>
        </nav>
    </header>
    <div class="interface">
        <!-- Menu lateral -->
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
                        <span class="icon"><i class="bi bi-house-fill"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="../../cronograma/cronograma.php">
                        <span class="icon"><i class="bi bi-calendar-check-fill"></i></span>
                        <span class="txt-link">Cronograma</span>
                    </a>
                </li>
                
                <li class="item-menu ativo">
                    <a href="../disciplinas.php">
                        <span class="icon"><i class="bi bi-book-half"></i></span>
                        <span class="txt-link">Disciplinas</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="../../informacoes/informacoes.php">
                        <span class="icon"><i class="bi bi-info-circle-fill"></i></span>
                        <span class="txt-link">Informações</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="../../flashcards/flashcards.php">
                        <span class="icon"><i class="bi bi-mortarboard-fill"></i></span>
                        <span class="txt-link">Flashcards</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="../../perfil/perfil.php">
                        <span class="icon"><i class="bi bi-person-bounding-box"></i></span>
                        <span class="txt-link">Meu Perfil</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Conteúdo principal -->
        <div class="conteudo">
            <section>
                <!-- Cabeçalho da disciplina -->
                <div class="materia" id="geografia">
                    <i class="bi bi-globe2"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Geografia</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Geografia no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Geografia Física</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Geografia Humana</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Geopolítica</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Brasil</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Globalização</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Geografia Física -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Geografia Física<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_geo/fisica.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Relevo e Clima</h3>
                                        <p>Estudo das formas do relevo, clima e hidrografia.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Geografia Humana -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Geografia Humana<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_geo/humana.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>População e Urbanização</h3>
                                        <p>Distribuição da população, migrações e urbanização.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Geopolítica -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Geopolítica<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_geo/geopolitica.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Conflitos e poder</h3>
                                        <p>Estudo de conflitos internacionais, blocos econômicos e guerras.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Brasil -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Brasil<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_geo/brasil.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Geografia do Brasil</h3>
                                        <p>Regiões, economia, clima e desafios ambientais.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Globalização -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Globalização<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_geo/globalizacao.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Economia e cultura global</h3>
                                        <p>Processos de integração econômica, tecnológica e cultural.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <script src="../../menu.js"></script> 
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
