<?php
session_start();
include ('../../conexao.php');

if (!isset($_SESSION['usuario_id'])){
    header("Location: ../../login/login.php");
    exit();
}

$nomeUsuario = $_SESSION['usuario_nome'];

$semanaId = 1;
if (isset($_SESSION['semana_id'])) {
    $semanaId = $_SESSION['semana_id'];
}
$dadosCronograma = [];
$sql = "SELECT dia_semana, horario, disciplina, conteudo 
        FROM cronograma 
        WHERE id_usuario=? AND semana_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $_SESSION['usuario_id'], $semanaId);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()){
    $dadosCronograma[$row['dia_semana']][$row['horario']] = [
        'disciplina' => $row['disciplina'],
        'conteudo' => $row['conteudo']
    ];
}
$stmt->close();

$disciplinas = ["Matemática","Química","Sociologia","Biologia","Física","História","Geografia","Filosofia","Redação"];

// Formulário 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['materia'] as $d => $horarios) {
        foreach ($horarios as $h => $disciplina) {
            $conteudo = htmlspecialchars(trim($_POST['conteudo'][$d][$h]));

            // checar se já existe um registro para este usuário/dia/hora/semana
            $sqlcheck = "SELECT id FROM cronograma WHERE id_usuario=? AND dia_semana=? AND horario=? AND semana_id=?";
            $stmtcheck = $conn->prepare($sqlcheck);
            $stmtcheck->bind_param('isii', $_SESSION['usuario_id'], $d, $h, $semanaId);
            $stmtcheck->execute();
            $stmtcheck->store_result();

            if ($stmtcheck->num_rows == 0) {
                $sql = "INSERT INTO cronograma (id_usuario, semana_id, dia_semana, horario, disciplina, conteudo) 
                        VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iiisss", $_SESSION['usuario_id'], $semanaId, $d, $h, $disciplina, $conteudo);
                $stmt->execute();
            } else {
                $sql = "UPDATE cronograma 
                        SET disciplina=?, conteudo=? 
                        WHERE id_usuario=? AND dia_semana=? AND horario=? AND semana_id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssiisi", $disciplina, $conteudo, $_SESSION['usuario_id'], $d, $h, $semanaId);
                $stmt->execute();
            }
            $stmtcheck->close();
        }
    }
    echo "<script>window.location.href='cronograma.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma</title>
    <link rel="stylesheet" href="../barra.css">
    <link rel="stylesheet" href="../geral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
            <li class="item-menu ativo">
                <a href="#">
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
    <section>
        <div class="conteudo">
            <div class="tabela">
                <form action="cronograma.php" method="POST">
                    <table border="1" class="tabela">
                        <thead> 
                            <tr class="superior_row">
                                <th colspan="8" class="superior_head"> 
                                    <i class="bi bi-arrow-left-circle" id="esquerda"></i> 
                                    Semana <span id="semana-num"><?php echo $semanaId; ?></span> 
                                    <i class="bi bi-arrow-right-circle" id="direita"></i> 
                                </th>
                            </tr>
                            <tr class="semana">
                                <th> Hora </th>
                                <th> Seg </th>
                                <th> Ter</th>
                                <th> Qua </th>
                                <th> Qui</th>
                                <th> Sex </th>
                                <th> Sab</th>
                                <th> Dom </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            for($h=8; $h<=22; $h+=4){
                                echo "<tr>";
                                echo "<td class='hora'> {$h}:00 </td>";
                                for ($d=0; $d<7; $d++) {

                                    $discSelecionada = $dadosCronograma[$d][$h]['disciplina'] ?? '';
                                    $conteudo = $dadosCronograma[$d][$h]['conteudo'] ?? '';

                                    echo "<td class='interativo'>
                                        <select name='materia[{$d}][{$h}]'>";
                                        foreach($disciplinas as $disc){
                                            $selected = ($disc === $discSelecionada) ? "selected" : "";
                                            echo "<option value='{$disc}' {$selected}>{$disc}</option>";
                                        }
                                    echo "</select>
                                        <input type='text' name='conteudo[{$d}][{$h}]' value='".htmlspecialchars($conteudo)."'/>
                                    </td>";
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <button type="submit"> Salvar alterações </button>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="../menu.js"></script>
<script>
// AJAX para controlar semana
let semana = <?php echo $semanaId; ?>;

function atualizarSemana(novaSemana) {
    if (novaSemana < 1) return;
    semana = novaSemana;
    document.getElementById('semana-num').textContent = semana;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax_semana.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (xhr.status === 200) {
            location.reload(); // recarrega a página com os dados da nova semana
        }
    };
    xhr.send("semana=" + semana);
}

document.getElementById('direita').addEventListener('click', () => {
    atualizarSemana(semana + 1);
});

document.getElementById('esquerda').addEventListener('click', () => {
    if (semana > 1) {
        atualizarSemana(semana - 1);
    }
});
</script>
</body>
</html>
