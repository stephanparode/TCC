<?php
include ('../../conexao.php');

if(isset($_GET['id_uni'])) {
    $id_uni = intval($_GET['id_uni']);

    $sqlcurs = "SELECT id_curso, nome_curso FROM curso WHERE id_universidade = ? ORDER BY nome_curso";
    $stmt = $conn->prepare($sqlcurs);
    $stmt->bind_param("i", $id_uni);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row['id_curso']."'>".$row['nome_curso']."</option>";
        }
    } else {
        echo "<option value=''>Nenhum curso encontrado</option>";
    }

    $stmt->close();
}
$conn->close();
?>
