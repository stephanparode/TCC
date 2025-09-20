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
    <title>Redação</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE REDAÇÃO ================= */
        .materia i {
            color: #7048e8;
        }
        .estatisticas-container {
            background-color: #f2f0fa;
            border-left: 5px solid #7048e8;
        }
        .estatisticas-container h2 {
            color: #5a3dbd;
        }
        .estatistica-item h3 {
            color: #7048e8;
        }
        .barra-preenchida {
            background-color: #7048e8;
        }
    </style>
</head>
<body>
    <header>
        <h1>Redação</h1>
        <nav>
            <a href="#redacao">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Estrutura</a>
            <a href="#lista2">Técnicas</a>
            <a href="#lista3">Argumentação</a>
            <a href="#lista4">Cultura</a>
            <a href="#lista5">Redações Nota Mil</a>
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
                <div class="materia" id="redacao">
                    <i class="bi bi-pencil-square"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Redação</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Redação no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Estrutura</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Técnicas</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Argumentação</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Cultura</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Redações Nota Mil</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Estrutura -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Estrutura<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_red/estrutura.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Introdução, desenvolvimento e conclusão</h3>
                                        <p>Organização do texto para coerência e clareza.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Técnicas -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Técnicas<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_red/tecnicas.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Coesão, coerência e argumentação</h3>
                                        <p>Estratégias para fortalecer a escrita e argumentação do texto.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Argumentação -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Argumentação<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_red/argumentacao.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Construção de argumentos</h3>
                                        <p>Como elaborar ideias persuasivas e fundamentadas.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Cultura -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Cultura<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_red/cultura.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Referências culturais</h3>
                                        <p>Incluindo fatos históricos, obras literárias e manifestações culturais.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Redações Nota Mil -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Redações Nota Mil<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_red/redacoes_mil.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Exemplos de redações nota máxima</h3>
                                        <p>Análise de textos que receberam nota máxima no ENEM.</p>
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
