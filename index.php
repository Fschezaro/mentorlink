
<!DOCTYPE html>
<html lang="pt-br">

<?php require 'components/head.html'; ?>
<body class="d-flex flex-column">
    <?php include 'components/header.html';?>
    <section class="principal">
        <div class="principal-content">
            <h1>Bem vindo</h1>
            <a href="preform.php" class="btn btn-primary my-3">Começar minha jornada!</a>
            <p class="mx-3">MentorLink, ajudando você a encontrar seu caminho.</p>
        </div>
    </section>
    <section id="about" class="about h-50">
        <h2>O que é MentorLink?</h2>
        <p>A MentorLink é uma empresa inovadora dedicada a auxiliar profissionais e estudantes a descobrirem sua área
            específica de atuação no vasto campo da tecnologia. Utilizando um sistema avançado de avaliação de perfil,
            que combina análise de habilidades, interesses pessoais e tendências do mercado </p>
    </section>
    <?php require 'components/footer.html';?>
</body>

</html>
<?php
$arquivo = 'logs.txt';
$dataHora = date('Y-m-d H:i:s');
$enderecoIP = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isMobile = preg_match('/Mobile|Android|iPhone|iPad/', $userAgent) ? 'Sim' : 'Não';
$log = "Acesso em: $dataHora - IP: $enderecoIP - Navegador: $userAgent - Dispositivo Móvel: $isMobile\n";
file_put_contents($arquivo, $log, FILE_APPEND);
?>