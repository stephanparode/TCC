<?php
session_start();

if (!isset($_SESSION['usuario_id'])){
    header("Location: ../../login/login.php");
    exit();
}

$nomeUsuario = $_SESSION['usuario_nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="../barra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../geral.css">
    <link rel="stylesheet" href="style.css">
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
                <li class="item-menu"><a href="../home/home.php"><span class="icon"><i class="bi bi-house-fill"></i></span><span class="txt-link">Home</span></a></li>
                <li class="item-menu"><a href="../cronograma/cronograma.php"><span class="icon"><i class="bi bi-calendar-check-fill"></i></span><span class="txt-link">Cronograma</span></a></li>
                <li class="item-menu"><a href="../disciplinas/disciplinas.php"><span class="icon"><i class="bi bi-book-half"></i></span><span class="txt-link">Disciplinas</span></a></li>
                <li class="item-menu ativo"><a href="#"><span class="icon"><i class="bi bi-info-circle-fill"></i></span><span class="txt-link">Informações</span></a></li>
                <li class="item-menu"><a href="../flashcards/flashcards.php"><span class="icon"><i class="bi bi-envelope-paper-fill"></i></span><span class="txt-link">Flashcards</span></a></li>
                <li class="item-menu"><a href="../perfil/perfil.php"><span class="icon"><i class="bi bi-person-bounding-box"></i></span><span class="txt-link">Meu Perfil</span></a></li>
            </ul>
        </nav>


        <div class="conteudo">
            <header>
                <h1>INFORMAÇÕES</h1>
            </header>

            <section class="descricao">
                <i class="bi bi-info-circle" id="iconeinfo"></i>
                <div class="desc">
                    
                    <p> Esta é a sessão de informações. Aqui você encontrará esclarecimentos gerais sobre o funcionamento do ENEM,
                         além de dicas de estudo para otimizar seu tempo e empenho!
                    </p>
                </div>
            </section>
            <section class="section-imagens">
                <div class="imagensinfo">
                    <a href="#enem">
                        <div class="imagens1"><h4>ENEM, inscrição e datas</h4></div>
                    </a>
                    <a href="#dicas">
                    <div class="imagens2"><h4>Dicas de estudo</h4></div>
                    </a>
                </div>
            </section>
            <section class="section-texto" id="enem">
                <div class="bloco-texto">
                    <h2>ENEM, inscrição e datas</h2>
                    <p>O Exame Nacional do Ensino Médio (ENEM) é a principal avaliação educacional do Brasil, criada para avaliar o desempenho dos estudantes e servir como porta de entrada para universidades públicas, bolsas de estudo e programas de financiamento estudantil.</p>

                    <h3>Inscrição</h3>
                    <p>A inscrição é realizada exclusivamente pela <strong>Página do Participante</strong>, no site oficial do <strong>INEP</strong>. Para se inscrever, é necessário CPF válido, documento de identidade e criação de senha de acesso. A taxa de inscrição deve ser paga dentro do prazo estabelecido, salvo casos de isenção.</p>
                    <ul>
                        <li><strong>Período de inscrições:</strong> geralmente no mês de maio.</li>
                        <li><strong>Isenção:</strong> estudantes de baixa renda ou concluintes de escola pública podem solicitar.</li>
                        <li><strong>Taxa de inscrição:</strong> em torno de R$ 85,00.</li>
                    </ul>

                    <h3>Aplicação das Provas</h3>
                    <ul>
                        <li><strong>1º dia:</strong> Linguagens, Ciências Humanas e Redação – duração de 5h30.</li>
                        <li><strong>2º dia:</strong> Ciências da Natureza e Matemática – duração de 5h.</li>
                    </ul>

                    <h3>Calendário típico</h3>
                    <ul>
                        <li>Publicação do edital: março/abril.</li>
                        <li>Inscrições: maio/junho.</li>
                        <li>Pagamento da taxa: até junho.</li>
                        <li>Aplicação das provas: novembro.</li>
                        <li>Resultado: janeiro do ano seguinte.</li>
                    </ul>

                    <h3>Utilização da Nota</h3>
                    <ul>
                        <li><strong>SISU:</strong> ingresso em universidades públicas.</li>
                        <li><strong>PROUNI:</strong> bolsas de estudo em universidades privadas.</li>
                        <li><strong>FIES:</strong> financiamento estudantil.</li>
                        <li><strong>Instituições estrangeiras:</strong> algumas universidades aceitam a nota.</li>
                    </ul>
                </div>
            </section>
            <section class="section-texto" id="dicas">
                <div class="bloco-texto">
                    <h2>Dicas de estudo</h2>
                    <p>Preparar-se para o ENEM exige planejamento estratégico, organização do tempo e disciplina. Mais importante do que estudar muito é estudar de forma inteligente, mantendo o equilíbrio entre teoria, prática e descanso.</p>

                    <h3>Organização</h3>
                    <ul>
                        <li><strong>Monte um cronograma:</strong> distribua os conteúdos de forma equilibrada ao longo da semana.</li>
                        <li><strong>Priorize suas dificuldades:</strong> comece pelos assuntos em que tem mais dificuldade.</li>
                        <li><strong>Defina metas semanais:</strong> pequenos objetivos trazem motivação contínua.</li>
                    </ul>

                    <h3>Técnicas de estudo</h3>
                    <ul>
                        <li><strong>Mapa mental:</strong> organize informações visualmente para facilitar a memorização.</li>
                        <li><strong>Pomodoro:</strong> estude em blocos de 25 minutos com pausas curtas.</li>
                        <li><strong>Revisão espaçada:</strong> retome os conteúdos em intervalos regulares para fixação.</li>
                        <li><strong>Questões comentadas:</strong> resolva provas anteriores e entenda a lógica das respostas.</li>
                    </ul>

                    <h3>Redação</h3>
                    <p>A redação vale até 1000 pontos e é decisiva no resultado final. Pratique semanalmente a produção de textos dissertativo-argumentativos, respeitando os critérios oficiais: domínio da norma culta, clareza, coesão, argumentação consistente e proposta de intervenção.</p>

                    <h3>Saúde e Bem-estar</h3>
                    <ul>
                        <li><strong>Sono:</strong> dormir bem é essencial para a memória e concentração.</li>
                        <li><strong>Alimentação:</strong> prefira refeições leves e nutritivas.</li>
                        <li><strong>Exercícios:</strong> atividade física ajuda a reduzir o estresse e melhorar foco.</li>
                    </ul>

                    <h3>No dia da prova</h3>
                    <ul>
                        <li>Chegue cedo para evitar imprevistos.</li>
                        <li>Leve documento com foto, caneta preta de tubo transparente e cartão de confirmação.</li>
                        <li>Faça primeiro as questões mais fáceis e depois volte às difíceis.</li>
                        <li>Administre bem o tempo da redação e reserve alguns minutos para revisão.</li>
                    </ul>
                </div>
            </section>

        </div>
    </div>

    <script src="../menu.js"></script>
</body>
</html>
