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
    <title>Disciplinas</title>
    <link rel="stylesheet" href="../geral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../barra.css">
    <link rel="stylesheet" href="materia.css">
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo-area">
                <h1 class="titulo-header"> Disciplinas </h1>
            </div>
            <div class="usuario-area">
                <span class="boas-vindas">Olá, <?php echo $nomeUsuario; ?> 👋</span>
                <a href="../../login/logout.php" class="btn-logout">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>
        </div>
    </header>
<div class="interface">
    <nav class="menu-lateral">
        
         <div class="imagem">
            <img src="../imagens/logo2.png" alt="logo" id="logo">
        </div>

        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="../home/home.php">
                    <span class="icon"> <i class="bi bi-house-fill"></i> </span>
                    <span class="txt-link"> Home </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../cronograma/cronograma.php">
                    <span class="icon"> <i class="bi bi-calendar-check-fill"></i> </span>
                    <span class="txt-link"> Cronograma </span>
                </a>
            </li>
            
            <li class="item-menu ativo">
                <a href="#">
                    <span class="icon"><i class="bi bi-book-half"></i></span>
                    <span class="txt-link"> Disciplinas </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../informacoes/informacoes.php">
                    <span class="icon"> <i class="bi bi-info-circle-fill"></i> </span>
                    <span class="txt-link"> Informações </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../flashcards/flashcards.php">
                    <span class="icon"> <i class="bi bi-mortarboard-fill"></i></span>
                    <span class="txt-link"> Cultura </span>
                </a>
            </li>

            <li class="item-menu">
                <a href="../perfil/perfil.php">
                    <span class="icon"><i class="bi bi-person-bounding-box"></i></span>
                    <span class="txt-link"> Meu Perfil </span>
                </a>
            </li>

        </ul>
    </nav>
    <div class="conteudo">
    <section class="section">
        <h1> Estudar por matérias </h1>
        <div class="tabela" cellspacing="10px">
            <table>
                <tr>
                    <td>
                        <div class="materia" id="plataforma">
                            <i data-lucide="grid"></i>
                            <div class="txtmateria">
                                <span class="desc">Geral</span>
                                <p>Plataforma</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="materias/matematica.php">
                            <div class="materia" id="matematica">
                                <i data-lucide="triangle"></i>
                                <div class="txtmateria">
                                    <span class="desc">Exatas</span>
                                    <p>Matemática</p>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <a href="materias/biologia.php">
                            <div class="materia" id="biologia">
                                <i data-lucide="leaf"></i>
                                <div class="txtmateria">
                                    <span class="desc">Naturezas</span>
                                    <p>Biologia</p>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <a href="materias/fisica.php">
                            <div class="materia" id="fisica">
                                <i data-lucide="magnet"></i>
                                <div class="txtmateria">
                                    <span class="desc">Naturezas</span>
                                    <p>Física</p>
                                </div>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="materias/quimica.php">
                            <div class="materia" id="quimica">
                                <i data-lucide="atom"></i>
                                <div class="txtmateria">
                                    <span class="desc">Naturezas</span>
                                    <p>Química</p>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <a href="materias/literatura.php">
                            <div class="materia" id="literatura">
                                <i data-lucide="book-open"></i>
                                <div class="txtmateria">
                                    <span class="desc">Humanas</span>
                                    <p>Literatura</p>
                                </div>
                            </div>
                    </a>    
                    </td>
                    <td>
                        <a href="materias/sociologia.php">
                            <div class="materia" id="sociologia">
                                <i data-lucide="users"></i>
                                <div class="txtmateria">
                                    <span class="desc">Humanas</span>
                                    <p>Sociologia</p>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td>
                    <a href="materias/portugues.php">
                        <div class="materia" id="portugues">
                            <i data-lucide="file-text"></i>
                            <div class="txtmateria">
                                <span class="desc">Linguagens</span>
                                <p>Português</p>
                            </div>
                        </div>
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <a href="materias/redacao.php">
                        <div class="materia" id="redacao">
                            <i data-lucide="pen-tool"></i>
                            <div class="txtmateria">
                                <span class="desc">Linguagens</span>
                                <p>Redação</p>
                            </div>
                        </div>
                    </a>
                    </td>
                    <td>
                    <a href="materias/filosofia.php">
                        <div class="materia" id="filosofia">
                            <i data-lucide="help-circle"></i>
                            <div class="txtmateria">
                                <span class="desc">Humanas</span>
                                <p>Filosofia</p>
                            </div>
                        </div>
                    </a>
                    </td>
                    <td>
                    <a href="materias/geografia.php">
                        <div class="materia" id="geografia">
                            <i data-lucide="map"></i>
                            <div class="txtmateria">
                                <span class="desc">Humanas</span>
                                <p>Geografia</p>
                            </div>
                        </div>
                    </a>
                    </td>
                    <a href="materias/historia.php">
                    <td>
                        <a href="materias/historia.php">
                        <div class="materia" id="historia">
                            <i data-lucide="landmark"></i>
                            <div class="txtmateria">
                                <span class="desc">Humanas</span>
                                <p>História</p>
                            </div>
                        </div>
                        </a>
                    </td>
                    </a>
                </tr>
            </table>
    </section>

</div>

</div>
    <script src="../menu.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>