<?php
// Habilita relatórios de erro do MySQLi (ajuda a detectar problemas)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Dados de conexão
$servername = "localhost"; // servidor MySQL
$username = "root";        // usuário do banco
$password = "";            // senha do MySQL (geralmente vazia no WAMP)
$dbname = "usuarios_planejai"; // nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão deu certo
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Definir charset para evitar problemas com acentos
$conn->set_charset("utf8");