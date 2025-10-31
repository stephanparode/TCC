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
    <title>Química</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* ================= ESTILOS ESPECÍFICOS DE QUÍMICA ================= */
        .materia i {
            color: #0ca678;
        }
        .estatisticas-container {
            background-color: #e0f8f3;
            border-left: 5px solid #0ca678;
        }
        .estatisticas-container h2 {
            color: #087f5b;
        }
        .estatistica-item h3 {
            color: #0ca678;
        }
        .barra-preenchida {
            background-color: #0ca678;
        }
    </style>
</head>
<body>
    <header>
        <h1>Química</h1>
        <nav>
            <a href="#quimica">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Tabelas Periódicas</a>
            <a href="#lista2">Ligações Químicas</a>
            <a href="#lista3">Reações Químicas</a>
            <a href="#lista4">Estequiometria</a>
            <a href="#lista5">Funções Inorgânicas</a>
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
                <div class="materia" id="quimica">
                    <i class="bi bi-flask-fill"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Química</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container" id="estatisticas">
                    <h2>Conteúdos mais frequentes de Química no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Tabelas Periódicas</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Ligações Químicas</h3>
                        <p>Presente em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Reações Químicas</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Estequiometria</h3>
                        <p>Presente em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Funções Inorgânicas</h3>
                        <p>Presente em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Tabelas Periódicas -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Tabelas Periódicas<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_qui/tabela_periodica.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Tabela Periódica</h3>
                                        <p>Organização dos elementos químicos em períodos e grupos.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Ligações Químicas -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Ligações Químicas<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_qui/ligacoes_ionicas.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Ligações Iônicas</h3>
                                        <p>Transferência de elétrons entre átomos formando íons.</p>
                                    </div>
                                </a>
                                <a href="apost_qui/ligacoes_covalentes.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Ligações Covalentes</h3>
                                        <p>Compartilhamento de elétrons entre átomos.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Reações Químicas -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Reações Químicas<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_qui/reacoes_simples.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Reações Simples</h3>
                                        <p>Tipos básicos de reações químicas: síntese, decomposição, troca.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Estequiometria -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Estequiometria<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_qui/estequiometria.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Estequiometria</h3>
                                        <p>Cálculo de reagentes e produtos em reações químicas.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Funções Inorgânicas -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Funções Inorgânicas<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_qui/oxidos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Óxidos</h3>
                                        <p>Compostos formados por oxigênio e outro elemento.</p>
                                    </div>
                                </a>
                                <a href="apost_qui/ácidos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Ácidos</h3>
                                        <p>Substâncias que liberam íons H⁺ em solução aquosa.</p>
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
