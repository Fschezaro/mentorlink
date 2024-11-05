<?php
// Receber as respostas do formulário
$question1 = $_POST['question1'] ?? null;
$question2 = $_POST['question2'] ?? null;
$question3 = $_POST['question3'] ?? null;
$question4 = $_POST['question4'] ?? null;
$question5 = $_POST['question5'] ?? null;
$question6 = $_POST['question6'] ?? null;
$question7 = $_POST['question7'] ?? null;
$question8 = $_POST['question8'] ?? null;
$question9 = $_POST['question9'] ?? null;
$question10 = $_POST['question10'] ?? null;
$question11 = $_POST['question11'] ?? null;
$question12 = $_POST['question12'] ?? null;

// Inicializar pontuações
$devSoftwarePoints = 0;
$redeComputadoresPoints = 0;
$dadosPoints = 0;

// Lógica de pontuação para Desenvolvimento de Software
if ($question1 === 'sim') $devSoftwarePoints++;
if ($question2 === 'sim') $devSoftwarePoints++;
if ($question3 === 'sim') $devSoftwarePoints++;
if ($question4 === 'sim') $devSoftwarePoints++;

// Lógica de pontuação para Redes de Computadores
if ($question5 === 'sim') $redeComputadoresPoints++;
if ($question6 === 'sim') $redeComputadoresPoints++;
if ($question7 === 'sim') $redeComputadoresPoints++;
if ($question8 === 'sim') $redeComputadoresPoints++;

// Lógica de pontuação para Dados
if ($question9 === 'sim') $dadosPoints++;
if ($question10 === 'sim') $dadosPoints++;
if ($question11 === 'sim') $dadosPoints++;
if ($question12 === 'sim') $dadosPoints++;

// Verifica se todas as pontuações são zero
if ($devSoftwarePoints === 0 && $redeComputadoresPoints === 0 && $dadosPoints === 0) {
    $redirectUrl = "http://localhost/trabalho/form.php"; // Redireciona para o formulário se não houver pontuação
} else {
    // Determinar a área com base na pontuação
    if ($devSoftwarePoints >= $redeComputadoresPoints && $devSoftwarePoints >= $dadosPoints) {
        $result = "Desenvolvimento de Software";
        $redirectUrl = "http://localhost/trabalho/result1.php"; // URL para a página de Desenvolvimento de Software
    } elseif ($redeComputadoresPoints >= $devSoftwarePoints && $redeComputadoresPoints >= $dadosPoints) {
        $result = "Redes de Computadores";
        $redirectUrl = "http://localhost/trabalho/result2.php"; // URL para a página de Redes de Computadores
    } elseif ($dadosPoints >= $devSoftwarePoints && $dadosPoints >= $redeComputadoresPoints) {
        $result = "Dados";
        $redirectUrl = "http://localhost/trabalho/result3.php"; // URL para a página de Dados
    } else {
        $redirectUrl = "http://localhost/trabalho/form.php"; // Redireciona para o formulário se não houver correspondência
    }
}

// Redirecionar para a URL correspondente
header("Location: $redirectUrl");
exit;
?>
