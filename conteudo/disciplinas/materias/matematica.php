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
    <title>Matemática</title>
    <link rel="stylesheet" href="../../barra.css">
    <link rel="stylesheet" href="../../geral.css">
    <link rel="stylesheet" href="../materia.css">
    <link rel="stylesheet" href="pgmateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<style>

    .estatisticas-container {
        background-color: #e6f2fc; 
        border-left: 5px solid #4dabf7; 
    }


</style>

<body>
    <header>
    <h1>Matemática</h1>
        <nav>
            <a href="#matematica">Início</a>
            <a href="#estatisticas">Estatísticas</a>
            <a href="#lista1">Funções</a>
            <a href="#lista2">Geometria</a>
            <a href="#lista3">Trigonometria</a>
            <a href="#lista4">Estatística & Probabilidade</a>
            <a href="#lista5">Análise Combinatória</a>
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
                <div class="materia" id="matematica">
                    <i class="bi bi-triangle"></i>
                    <div class="txtmateria">
                        <span class="desc">Disciplinas</span>
                        <p>Matemática</p>
                    </div>
                </div>

                <!-- Estatísticas -->
                <div class="estatisticas-container">
                    <h2>Conteúdos mais frequentes de Matemática no ENEM</h2>

                    <div class="estatistica-item">
                        <h3>Funções</h3>
                        <p>Apresentadas em <strong>25%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:25%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Geometria</h3>
                        <p>Apresentadas em <strong>20%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:20%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Trigonometria</h3>
                        <p>Apresentadas em <strong>15%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:15%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Estatística e Probabilidade</h3>
                        <p>Apresentadas em <strong>18%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:18%;"></div></div>
                    </div>

                    <div class="estatistica-item">
                        <h3>Análise Combinatória</h3>
                        <p>Apresentadas em <strong>12%</strong> das questões</p>
                        <div class="barra"><div class="barra-preenchida" style="width:12%;"></div></div>
                    </div>
                </div>

                <!-- Listas de exercícios -->
                <div class="listas">
                    <h1>Listas de exercícios e apostilas</h1>
                    <hr>

                    <!-- Funções -->
                    <div class="lista" id="lista1">
                        <details>
                            <summary>Funções<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_mat/func_afim.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Função afim</h3>
                                        <p>É uma função do 1º grau, representada por y = ax + b, com gráfico em linha reta.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/func_quad.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Função quadrática</h3>
                                        <p>Função do 2º grau, y = ax² + bx + c, cujo gráfico é uma parábola.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/func_exp.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Função exponencial</h3>
                                        <p>Função onde a variável está no expoente: y = a^x, cresce ou decresce rapidamente.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/func_log.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Função logarítmica</h3>
                                        <p>Função inversa da exponencial, y = log_a(x), usada para medir crescimento relativo.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Geometria -->
                    <div class="lista" id="lista2">
                        <details>
                            <summary>Geometria<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_mat/geo_plana.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Geometria plana</h3>
                                        <p>Estudo de figuras planas: triângulos, quadriláteros e círculos, perímetro e área.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/geo_espacial.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Geometria espacial</h3>
                                        <p>Figuras tridimensionais: prismas, cilindros, cones e esferas, volume e área.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/rel_metricas.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Relações métricas</h3>
                                        <p>Teorema de Pitágoras, semelhança de triângulos e medidas em figuras geométricas.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Trigonometria -->
                    <div class="lista" id="lista3">
                        <details>
                            <summary>Trigonometria<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_mat/raz_trig.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Triângulos retângulos</h3>
                                        <p>Razões trigonométricas: seno, cosseno e tangente em triângulos retângulos.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/circ_trig.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Círculo trigonométrico</h3>
                                        <p>Representação de ângulos, valores de seno, cosseno e tangente no círculo unitário.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/ident_trig.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Identidades trigonométricas</h3>
                                        <p>Relações fundamentais entre seno, cosseno e tangente para simplificação de expressões.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Estatística e Probabilidade -->
                    <div class="lista" id="lista4">
                        <details>
                            <summary>Estatística e Probabilidade<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_mat/med_central.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Medidas de centralidade</h3>
                                        <p>Média, mediana e moda, principais medidas para interpretar conjuntos de dados.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/medid_disp.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Medidas de dispersão</h3>
                                        <p>Amplitude, variância e desvio padrão, avaliando a dispersão dos dados.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/prob.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Probabilidade</h3>
                                        <p>Cálculo de chances de eventos simples e compostos, independente ou dependente.</p>
                                    </div>
                                </a>
                            </div>
                        </details>
                    </div>

                    <!-- Análise Combinatória -->
                    <div class="lista" id="lista5">
                        <details>
                            <summary>Análise Combinatória<i class="bi bi-caret-down-fill"></i></summary>
                            <div class="elementos">
                                <a href="apost_mat/permutacoes.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Permutações</h3>
                                        <p>Arranjos de elementos considerando ordem, com ou sem repetição.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/combinacoes.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Combinações</h3>
                                        <p>Escolhas de elementos sem considerar a ordem, usadas em problemas de seleção.</p>
                                    </div>
                                </a>
                                <a href="apost_mat/arranjos.pdf" target="_blank">
                                    <div class="item">
                                        <h5>Item</h5>
                                        <h3>Arranjos</h3>
                                        <p>Seleções de elementos considerando a ordem, menores que permutações.</p>
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
