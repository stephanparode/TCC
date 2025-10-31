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
    <title>Filosofia</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE FILOSOFIA ================= */
        .materia i {
            color: #ff6b6b;
        }
        .estatisticas-container {
            background-color: #fff0f0;
            border-left: 5px solid #ff6b6b;
        }
        .estatisticas-container h2 {
            color: #e63946;
        }
        .estatistica-item h3 {
            color: #ff6b6b;
        }
        .barra-preenchida {
            background-color: #ff6b6b;
        }
    </style>
</head>
<body>
    <header>
        <h1>Filosofia</h1>
        <nav>
            <a href="#filosofia">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Introdução</a>
            <a href="#lista2">Principais Filósofos</a>
            <a href="#lista3">Ética</a>
            <a href="#lista4">Política</a>
            <a href="#lista5">Epistemologia</a>
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
                <div class="materia" id="filosofia">
                    <i class="bi bi-lightbulb-fill"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Filosofia</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Filosofia no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Introdução</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Principais Filósofos</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Ética</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Política</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Epistemologia</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Introdução -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Introdução<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_filo/introducao.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Conceitos básicos de Filosofia</h3>
                                        <p>O que é Filosofia, história e áreas de estudo.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Principais Filósofos -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Principais Filósofos<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_filo/filosofos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Filósofos clássicos e contemporâneos</h3>
                                        <p>Platão, Aristóteles, Kant, Nietzsche, entre outros.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Ética -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Ética<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_filo/etica.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Conceitos e teorias éticas</h3>
                                        <p>Estudo da moral, dever e virtudes na Filosofia.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Política -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Política<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_filo/politica.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Teorias políticas</h3>
                                        <p>Contratos sociais, Estado, poder e cidadania.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Epistemologia -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Epistemologia<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_filo/epistemologia.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Teorias do conhecimento</h3>
                                        <p>Como o conhecimento é formado e validado na Filosofia.</p>
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
