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
    <title>História</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE HISTÓRIA ================= */
        .materia i {
            color: #f59f00;
        }
        .estatisticas-container {
            background-color: #fff7e6;
            border-left: 5px solid #f59f00;
        }
        .estatisticas-container h2 {
            color: #f08c00;
        }
        .estatistica-item h3 {
            color: #f59f00;
        }
        .barra-preenchida {
            background-color: #f59f00;
        }
    </style>
</head>
<body>
    <header>
        <h1>História</h1>
        <nav>
            <a href="#historia">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">História Geral</a>
            <a href="#lista2">História do Brasil</a>
            <a href="#lista3">História Contemporânea</a>
            <a href="#lista4">Movimentos Sociais</a>
            <a href="#lista5">Guerras e Conflitos</a>
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
                <div class="materia" id="historia">
                    <i class="bi bi-book-fill"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>História</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de História no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>História Geral</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>História do Brasil</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>História Contemporânea</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Movimentos Sociais</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Guerras e Conflitos</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- História Geral -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>História Geral<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_hist/antiga.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>História Antiga</h3>
                                        <p>Civilizações antigas, impérios e suas culturas.</p>
                                    </div>
                                </a>
                                <a href="apost_hist/medieval.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Idade Média</h3>
                                        <p>Feudalismo, Igreja e sociedade medieval.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- História do Brasil -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>História do Brasil<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_hist/colonial.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Período Colonial</h3>
                                        <p>Descobrimento, colonização e sociedade colonial.</p>
                                    </div>
                                </a>
                                <a href="apost_hist/imperial.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Período Imperial</h3>
                                        <p>Monarquia, economia e sociedade brasileira.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- História Contemporânea -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>História Contemporânea<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_hist/contemporanea.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Eventos Mundiais</h3>
                                        <p>Revoluções, guerras e globalização.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Movimentos Sociais -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Movimentos Sociais<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_hist/movimentos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Lutas e Movimentos</h3>
                                        <p>Movimentos sociais, direitos civis e resistência histórica.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Guerras e Conflitos -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Guerras e Conflitos<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_hist/guerras.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Guerras Mundiais</h3>
                                        <p>1ª e 2ª Guerra Mundial, causas e consequências.</p>
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
