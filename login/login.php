<?php
session_start(); // Inicia a sessão do usuário
include('../conexao.php'); // Conecta ao banco de dados

$erro = ""; // variável para mensagens de erro

if ($_SERVER["REQUEST_METHOD"] == "POST"){ // só roda quando o form é enviado

    $email = htmlspecialchars(trim($_POST["email"])); // mesma coisa, evita scripts maliciosos
    $senha = htmlspecialchars(trim($_POST["senha"]));

    // prepara a consulta SQL para buscar o usuário
    $sql= "SELECT id, nome_usuario, sobrenome_usuario, email, senha, id_curso FROM usuarios WHERE email = ?"; 
    $stmt = $conn->prepare($sql); //"empacota" nosso código
    $stmt->bind_param("s",$email); // vincula o parâmetro email
    $stmt->execute(); // executa a consulta
    $result=$stmt->get_result(); // resultado da pesquisa no banco de dados

    if ($result->num_rows === 1){ // verifica se o usuário existe
        $row = $result->fetch_assoc();

        if (password_verify($senha, $row['senha'])){ // verifica a senha
            // Dados do usuário
            $_SESSION['usuario_id'] = $row['id']; 
            $_SESSION['usuario_nome'] = $row['nome_usuario']; 
            $_SESSION['usuario_sobrenome'] = $row['sobrenome_usuario'];
            $_SESSION['usuario_email'] = $row['email'];

            // Buscar informações do curso, se existir
            if (!empty($row['id_curso'])) {
                $sqlCurso = "SELECT nome_curso, id_universidade FROM curso WHERE id_curso=?";
                $stmtCurso = $conn->prepare($sqlCurso);
                $stmtCurso->bind_param("i", $row['id_curso']);
                $stmtCurso->execute();
                $resultCurso = $stmtCurso->get_result()->fetch_assoc();
                $stmtCurso->close();

                $_SESSION['usuario_curso'] = $row['id_curso'];
                $_SESSION['usuario_nomecurso'] = $resultCurso['nome_curso'] ?? "Não definido";
                $_SESSION['usuario_universidade'] = $resultCurso['id_universidade'] ?? 0;

                // Buscar nome da universidade
                if (!empty($resultCurso['id_universidade'])) {
                    $sqlUni = "SELECT nome_uni FROM universidade WHERE id_uni=?";
                    $stmtUni = $conn->prepare($sqlUni);
                    $stmtUni->bind_param("i", $resultCurso['id_universidade']);
                    $stmtUni->execute();
                    $resultUni = $stmtUni->get_result()->fetch_assoc();
                    $stmtUni->close();

                    $_SESSION['usuario_nomeuniversidade'] = $resultUni['nome_uni'] ?? "Não definida";
                } else {
                    $_SESSION['usuario_nomeuniversidade'] = "Não definida";
                }

            } else {
                $_SESSION['usuario_curso'] = 0;
                $_SESSION['usuario_nomecurso'] = "Não definido";
                $_SESSION['usuario_universidade'] = 0;
                $_SESSION['usuario_nomeuniversidade'] = "Não definida";
            }

            header("Location: ../conteudo/home/home.php"); // redireciona para a home
            exit();
        } else {
            $erro = "Senha incorreta!"; // mensagem caso a senha esteja errada
        }
    } else {
        $erro = "Usuário não encontrado!"; // mensagem caso o email não exista
    }

    $stmt->close(); // fecha o statement
    $conn->close(); // fecha a conexão
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section> 
        <form action="login.php" method="POST" name="login">
            <img src="images/logo.png" alt="logo">
            <h3> Faça seu login </h3>

            <!-- Exibe mensagem de erro caso haja -->
            <?php if (!empty($erro)) : ?>
                <p class="erro"><?php echo $erro; ?></p>
            <?php endif; ?>

            <div class="inputs"> 
                <label for="email"> Endereço de email </label>
                <input type="email" name="email" id="email" required placeholder="Digite seu endereço de email" value="<?php echo isset($email) ? $email : ''; ?>">

                <label for="senha"> Senha de acesso </label>
                <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
            </div>

            <div class="submit">
                <input type="submit" name="enviar" id="enviar" value="Iniciar sessão">
            </div>
        </form>
    </section>
</body>
</html>
