<?php
session_start();
include('../../conexao.php'); 

if (!isset($_SESSION['usuario_id'])){
    header("Location: ../../login/login.php");
    exit();
}

$nomeUsuario = $_SESSION['usuario_nome'];
$faculdadeUsuario = $_SESSION['usuario_nomeuniversidade'];
$cursoUsuario = $_SESSION['usuario_nomecurso'];
$notaCorte = "Selecione um curso";
$peso_red = "";
$peso_mat = "";
$peso_ling = "";
$peso_hum = "" ;
$peso_cienc = "";


if (!empty($cursoUsuario)) {
    $sql = "SELECT nota_corte, peso_mat, peso_hum, peso_cienc, peso_red, peso_ling FROM curso WHERE nome_curso = ? AND id_universidade = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $cursoUsuario, $_SESSION['usuario_universidade']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $notaCorte = $row['nota_corte'];
        $peso_red = $row['peso_red'];
        $peso_mat = $row['peso_mat'];
        $peso_ling = $row['peso_ling'];
        $peso_hum = $row['peso_hum'];
        $peso_cienc = $row['peso_cienc'];
    }
    $stmt->close();
}

$conn->close();

date_default_timezone_set('America/Sao_Paulo');
$hora = date("H");
$dataVestibular = new DateTime("2025-11-09");
$dataatual = new DateTime("now");
$intervalo = $dataatual->diff($dataVestibular);
$diasRestantes = $intervalo->days;

if ($hora >= 6 && $hora <= 12) {
    $saudacao = "Bom dia";
} else if ($hora >= 13 && $hora <= 17){
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
    <link rel="stylesheet" href="../barra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../geral.css">
    <link rel="stylesheet" href="../header.css">
</head>

<body>
    <header class="header">
        <div class="header-container">
            <div class="logo-area">
                <h1 class="titulo-header"> Home </h1>
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
                <li class="item-menu ativo">
                    <a href="#">
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
                
                <li class="item-menu">
                    <a href="../disciplinas/disciplinas.php">
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
                        <span class="icon"> <i class="bi bi-envelope-paper-fill"></i></span>
                        <span class="txt-link"> Flashcards </span>
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
                <div class="mensagem">
                    <h1> &#128075; <?php echo "$saudacao, $nomeUsuario"?>! Pronto para começar a estudar? </h1>
                </div>
                <div class="info">
                    <div class="superior">
                        <div class="curso">
                            <div class="p1">
                                <h1> Como você está indo </h1>
                                <p> Com base no seu curso e faculdade dos sonhos </p> 
                            </div>
                            <div class="escolhas">
                                <div class="p2">
                                    <label for="faculdade"> Faculdade dos sonhos </label>
                                    <p> <?php echo "$faculdadeUsuario"?></p>
                                </div>
                                <div class="linha-vertical"></div>
                                <div class="p2">
                                    <label for="faculdade"> Curso de interesse </label>
                                    <p> <?php echo "$cursoUsuario"?></p>
                                </div>
                                <a href="../perfil/perfil.php">
                                    <button> Editar </button>
                                </a>
                            </div>
                        </div>
                        <div class="relogio">
                            <i class="bi bi-stopwatch"></i> 
                            <p> Faltam <br> <spam class="diasrestantes"> <?php echo "$diasRestantes"?> dias </spam> <br> Para o ENEM! </p> 
                        </div>
                    </div>
                    <div class="intermediario">
                        <div class="esquerda">
                            <div class="notacorte">
                                <label for="nota"> Nota de corte </label>
                                <h1> <?php echo "$notaCorte"?> </h1>
                            </div>
                            <div class="categoria" id="redacao">
                                <h3> <i class="bi bi-star-fill"></i> Peso <?php echo "$peso_red" ?> </h3>
                                <h2> Redação </h2>
                                <p> É um dos pontos mais importantes do ENEM. O candidato deve produzir um texto dissertativo-argumentativo
                                    sobre um tema de relevância social, apresentando uma proposta de intervenção viável e respeitando os 
                                    direitos humanos.</p>
                                <a href="../disciplinas/materias/redacao.php"> <button> Estude redação </button></a>
                            </div>
                        </div>
                        <div class="direita">
                            <div class="dupla">
                                <div class="categoria" id="matematica">
                                    <h3> <i class="bi bi-star-fill"></i> Peso <?php echo "$peso_mat" ?> </h3>
                                    <h2> Matemática  </h2>
                                    <p> Avalia o raciocínio lógico e a capacidade de resolver problemas práticos. Mais do que decorar fórmulas, é preciso interpretar gráficos, tabelas e aplicar conceitos em situações do cotidiano.</p>
                                    <a href="../disciplinas/materias/matematica.php"> <button> Estude matemática </button></a>
                                </div>
                                <div class="categoria" id="linguagens">
                                    <h3> <i class="bi bi-star-fill"></i> Peso <?php echo "$peso_ling" ?> </h3>
                                    <h2> Linguagens </h2>
                                    <p> Envolve interpretação de textos, literatura, artes, língua estrangeira (inglês ou espanhol) e até temas ligados à comunicação. O objetivo é analisar como o estudante compreende e utiliza a linguagem para construir sentido.</p>
                                    <a href="../disciplinas/materias/portugues.php"> <button> Estude português </button></a>
                                </div>
                            </div>
                            <div class="dupla">
                                <div class="categoria" id="natureza">
                                    <h3> <i class="bi bi-star-fill"></i> Peso <?php echo "$peso_cienc" ?> </h3>
                                    <h2> Ciências da Natureza </h2>
                                    <p> Reúne questões de química, física e biologia. A prova cobra tanto conteúdos teóricos quanto aplicações em situações reais, exigindo visão crítica e interdisciplinar.</p>
                                    <a href="../disciplinas/materias/biologia.php"> <button> Estude biologia </button></a>
                                </div>
                                <div class="categoria" id="humanas">
                                    <h3> <i class="bi bi-star-fill"></i> Peso <?php echo "$peso_hum" ?> </h3>
                                    <h2> Ciências Humanas  </h2>
                                    <p> Abrange história, geografia, filosofia e sociologia. O foco está em interpretar contextos sociais, políticos, econômicos e culturais, relacionando passado e presente para compreender a sociedade.</p>
                                    <a href="../disciplinas/materias/historia.php"> <button> Estude história </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="contador.js"></script>
    <script src="../menu.js"></script>
    
</body>
</html>