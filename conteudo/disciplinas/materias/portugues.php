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
    <title>Português</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE PORTUGUÊS ================= */
        .materia i {
            color: #845ef7;
        }
        .estatisticas-container {
            background-color: #f3f0ff;
            border-left: 5px solid #845ef7;
        }
        .estatisticas-container h2 {
            color: #5f3dc4;
        }
        .estatistica-item h3 {
            color: #845ef7;
        }
        .barra-preenchida {
            background-color: #845ef7;
        }
    </style>
</head>
<body>
    <header>
        <h1>Português</h1>
        <nav>
            <a href="#portugues">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Gramática</a>
            <a href="#lista2">Literatura</a>
            <a href="#lista3">Interpretação de Texto</a>
            <a href="#lista4">Ortografia</a>
            <a href="#lista5">Redação</a>
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
                <div class="materia" id="portugues">
                    <i class="bi bi-journal-text"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Português</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Português no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Gramática</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Literatura</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Interpretação de Texto</h3>
                        <p>Presente em <strong>30%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:30%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Ortografia</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Redação</h3>
                        <p>Presente em <strong>10%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:10%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Gramática -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Gramática<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_port/gramatica.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Regras gramaticais</h3>
                                        <p>Principais tópicos de ortografia, sintaxe e morfologia.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Literatura -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Literatura<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_port/literatura.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Principais obras e autores</h3>
                                        <p>Estudos de autores e movimentos literários.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Interpretação de Texto -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Interpretação de Texto<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_port/interpretacao.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Análise de textos</h3>
                                        <p>Exercícios de compreensão e interpretação de diferentes tipos de textos.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Ortografia -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Ortografia<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_port/ortografia.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Regras de escrita</h3>
                                        <p>Estudo de acentuação, hífen e ortografia correta.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Redação -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Redação<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_port/redacao.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Técnicas de redação</h3>
                                        <p>Estrutura, coesão e coerência, e práticas de produção textual.</p>
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
