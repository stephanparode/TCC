<?php
include('../conexao.php'); // conexão com o banco

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebendo e limpando os dados
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $sobrenome = htmlspecialchars(trim($_POST["sobrenome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $senha = $_POST["senha"];
    $confirmasenha = $_POST["confirmasenha"];

    // Validação de senha
    if ($senha !== $confirmasenha) {
        echo "As senhas não coincidem!";
        exit;
    }

    // Checagem de email já cadastrado
    $sql_check = "SELECT id FROM usuarios WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        echo "Este email já está cadastrado!";
        $stmt_check->close();
        $conn->close();
        exit;
    }
    $stmt_check->close();

    // Criptografia da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserção no banco
    $sql = "INSERT INTO usuarios (nome_usuario, sobrenome_usuario, email, senha) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha_hash);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section> 
        <form action="cadastro.php" method="POST" name="cadastro">
            <div class="mensagem">
                <h1> Seja bem vindo ao Planejaí!</h1>
                <p> Caso já possua uma conta, faça login abaixo: </p>
                <a href="../login/index.html"> 
                    <button type="button"> Faça login </button>
                </a>
            </div>
            <div class="formulario">
            <img src="images/logo.png" alt="logo">
            <h3> Faça seu cadastro </h3>
                <div class="inputs"> 
                    <label for="email"> Nome </label>
                    <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">
                    <label for="senha"> Sobrenome </label>
                    <input type="text" name="sobrenome" id="sobrenome" required placeholder="Digite seu sobrenome">
                </div>
                <div class="inputs"> 
                    <label for="email"> Endereço de email </label>
                    <input type="text" name="email" id="email" required placeholder="Digite seu endereço de email">
                </div>
                <div class="inputs">
                    <label for="senha"> Senha de acesso </label>
                    <input type="password" name="senha" id="senha" required placeholder="Crie uma senha">
                    <label for="senha"> Confirmar senha </label>
                    <input type="password" name="confirmasenha" id="confirmasenha" required placeholder="Confirme sua senha">
                </div>
                <div class="submit">
                    <input type="submit" name="enviar" id="enviar" value="Concluir cadastro">
                </div>
            </div>
        </form>
    </section>
</body>
</html>