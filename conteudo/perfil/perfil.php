<?php
session_start();
include('../../conexao.php');

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../../login/login.php");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];

function atualizarSessao($conn, $usuario_id) {
    $sql = "SELECT nome_usuario, sobrenome_usuario, email, id_curso FROM usuarios WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if ($result) {
    $_SESSION['usuario_nome'] = $result['nome_usuario'];
    $_SESSION['usuario_sobrenome'] = $result['sobrenome_usuario'];
    $_SESSION['usuario_email'] = $result['email'];
    $_SESSION['usuario_curso'] = $result['id_curso'];

    // Buscar informações do curso
    $sqlbuscauni1 = "SELECT id_universidade, nome_curso FROM curso WHERE id_curso=?";
    $stmtbuscauni1 = $conn->prepare($sqlbuscauni1);
    $stmtbuscauni1->bind_param("i", $result["id_curso"]);
    $stmtbuscauni1->execute();
    $result2 = $stmtbuscauni1->get_result()->fetch_assoc();
    $stmtbuscauni1->close();

    if ($result2) {
        $_SESSION['usuario_nomecurso'] = $result2['nome_curso'];
        $_SESSION['usuario_universidade'] = $result2['id_universidade'];

        // Buscar nome da universidade
        $sqlbuscauni2 = "SELECT nome_uni FROM universidade WHERE id_uni=?";
        $stmtbuscauni2 = $conn->prepare($sqlbuscauni2);
        $stmtbuscauni2->bind_param("i", $result2["id_universidade"]);
        $stmtbuscauni2->execute();
        $result3 = $stmtbuscauni2->get_result()->fetch_assoc();
        $stmtbuscauni2->close();

        if ($result3) {
            $_SESSION['usuario_nomeuniversidade'] = $result3['nome_uni'];
        }
    }
}


    $stmt->close();
}


$nomeUsuario = $_SESSION['usuario_nome'];
$sobrenomeUsuario = $_SESSION['usuario_sobrenome'];
$emailUsuario = $_SESSION['usuario_email'];
$cursoUsuario = isset($_SESSION['usuario_curso']) ? $_SESSION['usuario_curso'] : "";


$sqluni = "SELECT id_uni, nome_uni FROM universidade ORDER BY nome_uni";
$resultuni = $conn->query($sqluni);


$mensagem = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeAtualizado = htmlspecialchars(trim($_POST["nome"]));
    $sobrenomeAtualizado = htmlspecialchars(trim($_POST["sobrenome"]));
    $curso = intval($_POST["cursos"]); // converte para int

    $sqlsn = "UPDATE usuarios SET nome_usuario = ?, sobrenome_usuario = ?, id_curso = ? WHERE id=?";
    $stmt = $conn->prepare($sqlsn);
    $stmt->bind_param('ssii', $nomeAtualizado, $sobrenomeAtualizado, $curso, $id_usuario);

    if ($stmt->execute()) {
        $mensagem = "Atualizado com sucesso!";
        atualizarSessao($conn, $id_usuario);

        // Atualiza variáveis locais para refletir na tela
        $nomeUsuario = $_SESSION['usuario_nome'];
        $sobrenomeUsuario = $_SESSION['usuario_sobrenome'];
        $emailUsuario = $_SESSION['usuario_email'];
        $cursoUsuario = $_SESSION['usuario_curso'];
    }
    $stmt->close();
}

$conn->close();
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
                    <span class="icon"><i class="bi bi-house-fill"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../cronograma/cronograma.php">
                    <span class="icon"><i class="bi bi-calendar-check-fill"></i></span>
                    <span class="txt-link">Cronograma</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../disciplinas/disciplinas.php">
                    <span class="icon"><i class="bi bi-book-half"></i></span>
                    <span class="txt-link">Disciplinas</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../informacoes/informacoes.php">
                    <span class="icon"><i class="bi bi-info-circle-fill"></i></span>
                    <span class="txt-link">Informações</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../flashcards/flashcards.php">
                    <span class="icon"><i class="bi bi-mortarboard-fill"></i></span>
                    <span class="txt-link">Cultura </span>
                </a>
            </li>
            <li class="item-menu ativo">
                <a href="#">
                    <span class="icon"><i class="bi bi-person-bounding-box"></i></span>
                    <span class="txt-link">Meu Perfil</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="conteudo">
        <section>
            <form action="perfil.php" method="POST">
                <div class="editarperfil">
                    <div class="superior">
                        <div class="p1">
                            <h1>Editar Perfil</h1>
                            <div class="botao">
                                <a href="../home/home.php">
                                    <button type="button" class="voltar">Voltar</button>
                                </a>
                                <button type="submit" class="salvar">Salvar alterações</button>
                            </div>
                        </div>
                        <div class="foto">
                            <span><i class="bi bi-person-circle"></i></span>
                            <h1><?php echo "$nomeUsuario $sobrenomeUsuario"; ?></h1>
                        </div>
                    </div>
                    <hr>
                    <div class="inferior">
                        <?php if ($mensagem != "") echo "<p class='mensagem-sucesso'>$mensagem</p>"; ?>
                        <h1>Dados Pessoais</h1>
                        <div class="nomesobrenome">
                            <div class="dados">
                                <label for="nome">Nome</label>
                                <input type="text" value="<?php echo $nomeUsuario; ?>" id="nome" name="nome">
                            </div>
                            <div class="dados">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" value="<?php echo $sobrenomeUsuario; ?>" id="sobrenome" name="sobrenome">
                            </div>
                        </div>
                        <div class="dados">
                            <label for="email">Email</label>
                            <input type="text" value="<?php echo $emailUsuario; ?>" id="email" name="email" readonly>
                        </div>
                        <div class="nomesobrenome">
                            <div class="dados">
                                <label for="universidade">Faculdade dos sonhos</label>
                                <select name="universidade" id="universidade">
                                    <option value="">-- Selecione --</option>
                                    <?php 
                                        if ($resultuni->num_rows > 0){
                                            while ($row = $resultuni->fetch_assoc()){
                                                echo "<option value='".$row['id_uni']."'>".$row['nome_uni']."</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="dados">
                                <label for="cursos">Curso de interesse</label>
                                <select name="cursos" id="cursos">
                                    <option value="">-- Selecione uma universidade primeiro --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

<script src="../menu.js"></script>
<script>
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
