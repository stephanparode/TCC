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
    <title>Document</title>
    <link rel="stylesheet" href="../barra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

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

            <li class="item-menu ativo">
                <a href="#">
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

    <script src="../menu.js"></script>

</body>
</html>