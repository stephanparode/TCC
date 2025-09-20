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
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE LITERATURA ================= */
        .materia i {
            color: #9775fa;
        }
        .estatisticas-container {
            background-color: #f3f0ff;
            border-left: 5px solid #9775fa;
        }
        .estatisticas-container h2 {
            color: #5f3dc4;
        }
        .estatistica-item h3 {
            color: #9775fa;
        }
        .barra-preenchida {
            background-color: #9775fa;
        }
    </style>
</head>
<body>
    <header>
        <h1>Literatura</h1>
        <nav>
            <a href="#literatura">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Literatura Brasileira</a>
            <a href="#lista2">Literatura Portuguesa</a>
            <a href="#lista3">Movimentos Literários</a>
            <a href="#lista4">Figuras de Linguagem</a>
            <a href="#lista5">Análise de Textos</a>
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
                        <span class="icon"><i class="bi bi-envelope-paper-fill"></i></span>
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
                <div class="materia" id="literatura">
                    <i class="bi bi-book-fill"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Literatura</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Literatura no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Literatura Brasileira</h3>
                        <p>Presente em <strong>30%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:30%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Literatura Portuguesa</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Movimentos Literários</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Figuras de Linguagem</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Análise de Textos</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Literatura Brasileira -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Literatura Brasileira<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_lit/brasileira.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Autores Brasileiros</h3>
                                        <p>Principais autores e obras da literatura nacional.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Literatura Portuguesa -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Literatura Portuguesa<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_lit/portuguesa.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Autores Portugueses</h3>
                                        <p>Principais autores e obras de Portugal.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Movimentos Literários -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Movimentos Literários<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_lit/movimentos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Movimentos Literários</h3>
                                        <p>Romantismo, Realismo, Modernismo e outros.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Figuras de Linguagem -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Figuras de Linguagem<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_lit/figuras.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Figuras de Linguagem</h3>
                                        <p>Metáfora, metonímia, hipérbole e outras.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Análise de Textos -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Análise de Textos<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_lit/analise.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Interpretação de Textos</h3>
                                        <p>Compreensão, interpretação e análise de textos literários.</p>
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
