<?php
session_start();
include ('../../conexao.php');

if (!isset($_SESSION['usuario_id'])){
    header("Location: ../../login/login.php");
    exit();
}

$nomeUsuario = $_SESSION['usuario_nome'];
$sobrenomeUsuario = $_SESSION['usuario_sobrenome'];
$emailUsuario = $_SESSION['usuario_email'];

// Buscar universidades
$sqluni="SELECT id_uni, nome_uni FROM universidade ORDER BY nome_uni";
$resultuni = $conn->query($sqluni);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../barra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../geral.css">
</head>
<body>
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

                <li class="item-menu ativo">
                    <a href="#">
                        <span class="icon"><i class="bi bi-person-bounding-box"></i></span>
                        <span class="txt-link"> Meu Perfil </span>
                    </a>
                </li>

            </ul>
        </nav>

        <div class="conteudo">
            <section>
                <div class="editarperfil">
                    <div class="superior"> <h1>Editar Perfil </h1> 
                    <div class="botao"> <a href=""> 
                        <button> Voltar </button> </a> 
                        <button type="submit"> Salvar Alterações </button> 
                    </div> <div class="foto"> 
                        <spam> <i class="bi bi-person-circle"></i> 
                    </spam> <h1> <?php echo "$nomeUsuario $sobrenomeUsuario"?>
                    </div> 
                    </div>
                    <hr>
                    <div class="inferior">
                        <h1>Dados Pessoais</h1>
                        <form action="perfil.php" method="POST">
                            <div class="dados">
                                <label for="nome"> Nome </label>
                                <input type="text" value="<?php echo $nomeUsuario ?>" id="nome" name="nome">
                            </div>
                            <div class="dados">
                                <label for="sobrenome"> Sobrenome </label>
                                <input type="text" value="<?php echo $sobrenomeUsuario ?>" id="sobrenome" name="sobrenome">
                            </div>
                            <div class="dados">
                                <label for="email"> Email </label>
                                <input type="text" value="<?php echo $emailUsuario ?>" id="email" name="email">
                            </div>
                            <div class="dados">
                                <label for="universidade"> Faculdade dos sonhos </label>
                                <select name="universidade" id="universidade">
                                    <?php 
                                        if ($resultuni->num_rows > 0){
                                            while ($row = $resultuni->fetch_assoc()){ //fetch_assoc transforma as colunas do banco em um array associativo. 
                                            // Dessa forma, é possível percorrer todas as linhas retornadas pelo PHP. O while serve para retornar os valores do array enquanto eles existirem
                                                echo "<option value='".$row['id_uni']."'>".$row['nome_uni']."</option>";
                                            }
                                        }
                                    ?>
                                </select>

                                <label for="cursos"> Curso de interesse </label>
                                <select name="cursos" id="cursos">
                                    <option value="">-- Selecione uma universidade primeiro --</option>
                                </select>
                            </div>

                            <button type="submit">Salvar Alterações</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

<script src="../menu.js"></script>

<script>
// Função AJAX para carregar cursos. Estudar mais no futuro.
document.getElementById('universidade').addEventListener('change', function() {
    var idUni = this.value;
    var selectCursos = document.getElementById('cursos');

    if(idUni === "") {
        selectCursos.innerHTML = "<option value=''>-- Selecione uma universidade primeiro --</option>";
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get_cursos.php?id_uni=" + idUni, true);
    xhr.onload = function() {
        if(xhr.status === 200) {
            selectCursos.innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});
</script>
</body>
</html>
