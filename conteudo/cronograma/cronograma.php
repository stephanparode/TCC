<?php
session_start();
include ('../../conexao.php');

if (!isset($_SESSION['usuario_id'])){
    header("Location: ../../login/login.php");
    exit();
}

$nomeUsuario = $_SESSION['usuario_nome'];

// Dias da semana
$dias = ['seg','ter','qua','qui','sex','sab','dom'];
$disciplinas = ["Matemática","Química","Sociologia","Biologia","Física","História","Geografia","Filosofia","Redação", "Português", "Literatura", "Linguas Estrangeiras"];

// Semana atual
if (isset($_POST['semana'])) {
    $_SESSION['semana_id'] = intval($_POST['semana']);
} elseif (!isset($_SESSION['semana_id'])) {
    $stmt = $conn->prepare("SELECT id FROM semana WHERE usuario_id=? ORDER BY id DESC LIMIT 1");
    $stmt->bind_param("i", $_SESSION['usuario_id']);
    $stmt->execute();
    $stmt->bind_result($semanaBanco);
    if ($stmt->fetch()) {
        $_SESSION['semana_id'] = $semanaBanco;
    } else {
        $stmtIns = $conn->prepare("INSERT INTO semana (usuario_id, numero_semana) VALUES (?, 1)");
        $stmtIns->bind_param("i", $_SESSION['usuario_id']);
        $stmtIns->execute();
        $_SESSION['semana_id'] = $stmtIns->insert_id;
        $stmtIns->close();
    }
    $stmt->close();
}

$semanaId = $_SESSION['semana_id'];

// Buscar dados do cronograma
$dadosCronograma = [];
$stmt = $conn->prepare("SELECT dia_semana, horario, disciplina, conteudo 
                        FROM cronograma 
                        WHERE id_usuario=? AND semana_id=?");
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

// Salvar alterações do cronograma
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['materia'])) {
    foreach ($_POST['materia'] as $dia_semana => $horarios) {
        foreach ($horarios as $h => $disciplina) {
            $conteudo = htmlspecialchars(trim($_POST['conteudo'][$dia_semana][$h]));

            $stmtcheck = $conn->prepare("SELECT id_cronograma FROM cronograma 
                                         WHERE id_usuario=? AND dia_semana=? AND horario=? AND semana_id=?");
            $stmtcheck->bind_param("issi", $_SESSION['usuario_id'], $dia_semana, $h, $semanaId);
            $stmtcheck->execute();
            $resultcheck = $stmtcheck->get_result();

            if ($resultcheck->num_rows > 0) {
                $row = $resultcheck->fetch_assoc();
                $stmtupdate = $conn->prepare("UPDATE cronograma SET disciplina=?, conteudo=? WHERE id_cronograma=?");
                $stmtupdate->bind_param("ssi", $disciplina, $conteudo, $row['id_cronograma']);
                $stmtupdate->execute();
                $stmtupdate->close();
            } else {
                $stmtinsert = $conn->prepare("INSERT INTO cronograma 
                    (id_usuario, dia_semana, horario, semana_id, disciplina, conteudo) 
                    VALUES (?, ?, ?, ?, ?, ?)");
                $stmtinsert->bind_param("isisss", $_SESSION['usuario_id'], $dia_semana, $h, $semanaId, $disciplina, $conteudo);
                $stmtinsert->execute();
                $stmtinsert->close();
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
    <div class="imagem"><img src="../imagens/logo2.png" alt="logo" id="logo"></div>
    <div class="btn-expandir"><i class="bi bi-list" id="btn-exp"></i></div>
    <ul>
        <li class="item-menu"><a href="../home/home.php"><span class="icon"><i class="bi bi-house-fill"></i></span><span class="txt-link"> Home </span></a></li>
        <li class="item-menu ativo"><a href="#"><span class="icon"><i class="bi bi-calendar-check-fill"></i></span><span class="txt-link"> Cronograma </span></a></li>
        <li class="item-menu"><a href="../disciplinas/disciplinas.php"><span class="icon"><i class="bi bi-book-half"></i></span><span class="txt-link"> Disciplinas </span></a></li>
        <li class="item-menu"><a href="../informacoes/informacoes.php"><span class="icon"><i class="bi bi-info-circle-fill"></i></span><span class="txt-link"> Informações </span></a></li>
        <li class="item-menu"><a href="../flashcards/flashcards.php"><span class="icon"><i class="bi bi-envelope-paper-fill"></i></span><span class="txt-link"> Flashcards </span></a></li>
        <li class="item-menu"><a href="../perfil/perfil.php"><span class="icon"><i class="bi bi-person-bounding-box"></i></span><span class="txt-link"> Meu Perfil </span></a></li>
    </ul>
</nav>

<div class="conteudo">
    <section class="section">    
        <div class="tabela">
            <form action="cronograma.php" method="POST" id="formCronograma">
                <table border="1" class="tabela" cellspacing="8">
                    <thead>
                        <tr class="superior_row">
                            <th colspan="8" class="superior_head">
                                <i class="bi bi-arrow-left-circle" id="esquerda" style="cursor:pointer"></i> 
                                <span class="numerodasemana"> Semana <span id="semana-num"><?php echo $semanaId; ?></span> </span>
                                <i class="bi bi-arrow-right-circle" id="direita" style="cursor:pointer"></i>
                            </th>
                        </tr>
                        <tr class="semana">
                            <th>Hora</th>
                            <?php foreach($dias as $diaNome) echo "<th>".ucfirst($diaNome)."</th>"; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $horarios = [8,12,16,20];
                        foreach($horarios as $h){
                            echo "<tr>";
                            echo "<td class='hora'>{$h}:00</td>";
                            foreach($dias as $dia){
                                $discSelecionada = $dadosCronograma[$dia][$h]['disciplina'] ?? '';
                                $conteudo = $dadosCronograma[$dia][$h]['conteudo'] ?? '';
                                echo "<td class='interativo'>
                                        <select name='materia[{$dia}][{$h}]'>";
                                foreach($disciplinas as $disc){
                                    $selected = ($disc === $discSelecionada) ? "selected" : "";
                                    echo "<option value='{$disc}' {$selected}>{$disc}</option>";
                                }
                                echo "</select>
                                    <input type='text' name='conteudo[{$dia}][{$h}]' value='".htmlspecialchars($conteudo)."'/>
                                    </td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <button type="submit">Salvar alterações</button>
            </form>
        </div>
    </section>
</div>

<script>
// Atualiza cor dos selects
function atualizarCorSelect(select){
    const cores = {
        "Matemática":"#4dabf7",
        "Química":"#0ca678",
        "Sociologia":"#ff6b6b",
        "Biologia":"#38d9a9",
        "Física":"#20c997",
        "História":"#f59f00",
        "Geografia":"#f76707",
        "Filosofia":"#ff6b6b",
        "Redação":"#7048e8",
        "Português":"#845ef7",
        "Literatura":"#9775fa",
        "Linguas Estrangeiras":"#d6336c"

    };
    select.style.backgroundColor = cores[select.value] ?? "#f0f0f0";
}

document.querySelectorAll("select[name^='materia']").forEach(sel=>{
    atualizarCorSelect(sel);
    sel.addEventListener('change', function(){ atualizarCorSelect(this); });
});

// Setas de semana com AJAX
let semana = <?php echo $semanaId; ?>;

function atualizarSemana(novaSemana){
    if(novaSemana<1) return;
    semana = novaSemana;
    document.getElementById('semana-num').textContent = semana;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "cronograma.php", true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.onload = function(){
        if(xhr.status===200){
            location.reload();
        }
    };
    xhr.send("semana="+semana);
}

document.getElementById('direita').addEventListener('click', ()=>atualizarSemana(semana+1));
document.getElementById('esquerda').addEventListener('click', ()=>atualizarSemana(semana-1));
</script>
<script src=../menu.js>
</script>
</body>
</html>
