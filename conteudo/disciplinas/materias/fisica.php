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
    <title>Física</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE FÍSICA ================= */
        .materia i {
            color: #20c997;
        }
        .estatisticas-container {
            background-color: #e6fcf5;
            border-left: 5px solid #20c997;
        }
        .estatisticas-container h2 {
            color: #138d75;
        }
        .estatistica-item h3 {
            color: #20c997;
        }
        .barra-preenchida {
            background-color: #20c997;
        }
    </style>
</head>
<body>
    <header>
        <h1>Física</h1>
        <nav>
            <a href="#fisica">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Mecânica</a>
            <a href="#lista2">Termologia</a>
            <a href="#lista3">Ondulatória</a>
            <a href="#lista4">Eletricidade</a>
            <a href="#lista5">Óptica</a>
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
                <div class="materia" id="fisica">
                    <i class="bi bi-lightning-fill"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Física</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Física no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Mecânica</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Termologia</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Ondulatória</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Eletricidade</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Óptica</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Mecânica -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Mecânica<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_fis/mov_reta.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Movimento retilíneo</h3>
                                        <p>Velocidade, aceleração e equações do movimento uniforme e uniformemente variado.</p>
                                    </div>
                                </a>
                                <a href="apost_fis/leis_newton.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Leis de Newton</h3>
                                        <p>Princípios que regem o movimento dos corpos.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Termologia -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Termologia<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_fis/termometria.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Termometria</h3>
                                        <p>Temperatura, escalas termométricas e instrumentos de medição.</p>
                                    </div>
                                </a>
                                <a href="apost_fis/termodinamica.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Termodinâmica</h3>
                                        <p>Leis da energia, trabalho e calor.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Ondulatória -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Ondulatória<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_fis/ondas_som.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Ondas sonoras</h3>
                                        <p>Propagação, frequência, amplitude e velocidade do som.</p>
                                    </div>
                                </a>
                                <a href="apost_fis/ondas_luz.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Ondas luminosas</h3>
                                        <p>Propriedades da luz, reflexão, refração e espectro eletromagnético.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Eletricidade -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Eletricidade<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_fis/corrente.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Corrente elétrica</h3>
                                        <p>Conceitos de corrente, tensão e resistência.</p>
                                    </div>
                                </a>
                                <a href="apost_fis/circuitos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Circuitos elétricos</h3>
                                        <p>Leis de Ohm, associação de resistores e cálculo de corrente.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Óptica -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Óptica<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_fis/lentes.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Lentes</h3>
                                        <p>Formação de imagens, lentes convergentes e divergentes.</p>
                                    </div>
                                </a>
                                <a href="apost_fis/espelhos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Espelhos</h3>
                                        <p>Reflexão, formação de imagens e tipos de espelhos.</p>
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
