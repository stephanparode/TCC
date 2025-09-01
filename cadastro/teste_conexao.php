<?php
// Inclui a conexão
include('../conexao.php');

// Testa se a variável $conn existe
if (isset($conn)) {
    echo "Variável \$conn existe!<br>";
    // Testa se a conexão está OK
    if ($conn->connect_error) {
        echo "Erro de conexão: " . $conn->connect_error;
    } else {
        echo "Conexão realizada com sucesso!";
    }
} else {
    echo "Variável \$conn NÃO existe!";
}
?>