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
    <title>Sociologia</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE SOCIOLOGIA ================= */
        .materia i {
            color: #d6336c;
        }
        .estatisticas-container {
            background-color: #ffe3ed;
            border-left: 5px solid #d6336c;
        }
        .estatisticas-container h2 {
            color: #a61e4d;
        }
        .estatistica-item h3 {
            color: #d6336c;
        }
        .barra-preenchida {
            background-color: #d6336c;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sociologia</h1>
        <nav>
            <a href="#sociologia">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Conceitos Básicos</a>
            <a href="#lista2">Teorias Sociológicas</a>
            <a href="#lista3">Estratificação Social</a>
            <a href="#lista4">Cultura e Sociedade</a>
            <a href="#lista5">Movimentos Sociais</a>
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
                <div class="materia" id="sociologia">
                    <i class="bi bi-people-fill"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Sociologia</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Sociologia no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Conceitos Básicos</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Teorias Sociológicas</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Estratificação Social</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Cultura e Sociedade</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Movimentos Sociais</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Conceitos Básicos -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Conceitos Básicos<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_soc/conceitos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Introdução à Sociologia</h3>
                                        <p>Principais conceitos e fundamentos da disciplina.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Teorias Sociológicas -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Teorias Sociológicas<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_soc/teorias.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Teorias de Durkheim, Marx e Weber</h3>
                                        <p>Principais correntes e explicações sobre a sociedade.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Estratificação Social -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Estratificação Social<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_soc/estratificacao.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Classes e desigualdade</h3>
                                        <p>Análise das camadas sociais, desigualdade e mobilidade.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Cultura e Sociedade -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Cultura e Sociedade<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_soc/cultura.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Valores, normas e cultura</h3>
                                        <p>Relação entre cultura, sociedade e comportamento humano.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Movimentos Sociais -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Movimentos Sociais<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_soc/movimentos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Protestos e mobilizações</h3>
                                        <p>Análise dos principais movimentos sociais e sua importância.</p>
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
