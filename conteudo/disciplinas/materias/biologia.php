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
    <title>Biologia</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE BIOLOGIA ================= */
   
        .materia i {
            color: #228B22;
        }
        .estatisticas-container {
            background-color: #f0fff4;
            border-left: 5px solid #228B22;
        }
        .estatisticas-container h2 {
            color: #0b6623;
        }
        .estatistica-item h3 {
            color: #228B22;
        }
        .barra-preenchida {
            background-color: #32CD32;
        }

    </style>
</head>
<body>
    <header>
    <h1>Biologia</h1>
        <nav>
            <a href="#biologia">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Ecologia</a>
            <a href="#lista2">Genética</a>
            <a href="#lista3">Citologia</a>
            <a href="#lista4">Fisiologia Humana</a>
            <a href="#lista5">Evolução</a>
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
                <div class="materia" id="biologia">
                    <i class="bi bi-tree-fill"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Biologia</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Biologia no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Ecologia</h3>
                        <p>Presente em <strong>30%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:30%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Genética</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Citologia</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Fisiologia Humana</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Evolução</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Ecologia -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Ecologia<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_bio/ecossistemas.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Ecossistemas</h3>
                                        <p>Interação entre organismos e o ambiente em diferentes biomas.</p>
                                    </div>
                                </a>
                                <a href="apost_bio/ciclos_bio.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Ciclos biogeoquímicos</h3>
                                        <p>Movimento do carbono, nitrogênio, água e outros elementos no ambiente.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Genética -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Genética<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_bio/mendel.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Leis de Mendel</h3>
                                        <p>Princípios básicos da hereditariedade em organismos.</p>
                                    </div>
                                </a>
                                <a href="apost_bio/dna.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>DNA e RNA</h3>
                                        <p>Estrutura, função e importância do material genético.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Citologia -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Citologia<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_bio/celulas.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Células</h3>
                                        <p>Diferenças entre células procariontes e eucariontes, funções celulares.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Fisiologia Humana -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Fisiologia Humana<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_bio/sistemas.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Sistemas do corpo</h3>
                                        <p>Digestório, circulatório, respiratório, nervoso e outros.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Evolução -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Evolução<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_bio/darwin.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Darwinismo</h3>
                                        <p>Teoria da seleção natural como motor da evolução.</p>
                                    </div>
                                </a>
                                <a href="apost_bio/neodarwinismo.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Neodarwinismo</h3>
                                        <p>Integração da genética com a seleção natural.</p>
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
