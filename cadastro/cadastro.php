<?php
session_start(); // Sempre no topo. Inicia a sessão do usuário

include('../conexao.php'); // Inclui a conexão com o banco

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Só roda quando o form é enviado

    // Recebendo e limpando os dados do formulário
    $nome = htmlspecialchars(trim($_POST["nome"])); // Evita scripts maliciosos
    $sobrenome = htmlspecialchars(trim($_POST["sobrenome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $senha = $_POST["senha"];
    $confirmasenha = $_POST["confirmasenha"];

    // Validação de senha
    if ($senha !== $confirmasenha) {
        $erro = "As senhas não coincidem!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validação básica de email
        $erro = "Email inválido!";
    } else {

        // Checagem se o email já está cadastrado
        $sql_check = "SELECT id FROM usuarios WHERE email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $erro = "Este email já está cadastrado!";
        } else {

            // Criptografia da senha
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            // Inserção dos dados no banco
            $sql = "INSERT INTO usuarios (nome_usuario, sobrenome_usuario, email, senha) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha_hash);

            if ($stmt->execute()) {
                // Criar sessão do usuário após cadastro
                $_SESSION['id_usuario'] = $stmt->insert_id;
                $_SESSION['nome_usuario'] = $nome;
                $_SESSION['sobrenome_usuario'] = $sobrenome;
                $_SESSION['email_usuario'] = $email;

                // Redirecionar para a página inicial do usuário
                header("Location: ../conteudo/home/home.php");
                exit;
            } else {
                $erro = "Erro ao cadastrar: " . $stmt->error;
            }
            $stmt->close(); // Fecha o statement
        }
        $stmt_check->close(); // Fecha o statement de verificação
    }
    $conn->close(); // Fecha a conexão com o banco
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section> 
        <form action="cadastro.php" method="POST" name="cadastro">
            <div class="mensagem">
                <h1> Seja bem-vindo ao Planejaí! </h1>
                <p> Caso já possua uma conta, faça login abaixo: </p>
                <a href="../login/login.php">
                    <button type="button"> Faça login </button>
                </a>
            </div>
            <div class="formulario">
                <img src="images/logo.png" alt="logo">
                <h3> Faça seu cadastro </h3>

                <!-- Exibe mensagem de erro caso haja -->
                <?php if (!empty($erro)) : ?>
                    <p style="color:red; font-weight:bold;"><?php echo $erro; ?></p>
                <?php endif; ?>

                <div class="inputs"> 
                    <label for="nome"> Nome </label>
                    <input type="text" name="nome" id="nome" required placeholder="Digite seu nome" value="<?php echo isset($nome) ? $nome : ''; ?>">
                    <label for="sobrenome"> Sobrenome </label>
                    <input type="text" name="sobrenome" id="sobrenome" required placeholder="Digite seu sobrenome" value="<?php echo isset($sobrenome) ? $sobrenome : ''; ?>">
                </div>
                <div class="inputs"> 
                    <label for="email"> Endereço de email </label>
                    <input type="email" name="email" id="email" required placeholder="Digite seu endereço de email" value="<?php echo isset($email) ? $email : ''; ?>">
                </div>
                <div class="inputs">
                    <label for="senha"> Senha de acesso </label>
                    <input type="password" name="senha" id="senha" required placeholder="Crie uma senha">
                    <label for="confirmasenha"> Confirmar senha </label>
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
