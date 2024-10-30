<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MentorLink</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/logo-background.png">

</head>

<body>
<?php include 'components/header.html';?>

    <section class="principal">
        <div class="section">
            <div class="section-item">
            </div>
        </div>
    </section>

<?php require 'components/footer.html';?>
    <script>
        window.addEventListener('load', () => {
            const principal = document.querySelector('.principal');
            principal.classList.add('shrink');
            const section = document.querySelector('.section');
            setTimeout(() => {
                section.classList.add('visible'); // Adiciona a classe para ativar a animação
            }, 1000);
            const sectionitem = document.querySelector('.section-item');
            setTimeout(() => {
                sectionitem.classList.add('visible'); // Adiciona a classe para ativar a animação
            }, 2900);
        });
    </script>
</body>

</html>