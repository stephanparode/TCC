<?php
session_start();
include('../../conexao.php');

if (!isset($_SESSION['semana_id'])) {
    $_SESSION['semana_id'] = 1;
}

if (isset($_POST['semana'])) {
    $semana = intval($_POST['semana']);
    if ($semana < 1) $semana = 1;

    $_SESSION['semana_id'] = $semana;

    // Atualiza no banco se necessário
    $sql = "UPDATE semana_usuario SET semana_atual=? WHERE id_usuario=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $_SESSION['semana_id'], $_SESSION['usuario_id']);
    $stmt->execute();

    echo $_SESSION['semana_id'];
}
?>
