<?php
if (!isset($_GET['name'])){
    header('Location: index.php');
}
$name = $_GET['name'];
if ($name == "Matheus Camargo"){
    $professional = [
        "name" => "Matheus Camargo",
        "photo" => "img/matheus-camargo.png",
        "portfolio" => "./img/portfolio-matheus-camargo.jpg",
        "about" => "Engenheiro de Software formado pela PUC-PR, com mais de 5 anos
                     de experiência em desenvolvimento de soluções tecnológicas para
                     diferentes indústrias, com foco em qualidade, inovação e
                     escalabilidade. Tenho habilidades avançadas em programação e
                     arquitetura de sistemas e sou apaixonado por tecnologias
                     emergentes, especialmente em aplicações voltadas para a
                     automação e inteligência artificial. Meu objetivo é contribuir para o
                     desenvolvimento de projetos inovadores, que impactem
                     positivamente o mercado e promovam melhorias significativas na
                     vida das pessoas."
    ];
}elseif ($name == "Ana Mônica"){
    $professional = [
        "name" => "Ana Mônica",
        "photo" => "img/ana-monica.png",
        "portfolio" => "./img/portfolio-ana-monica.jpg",
        "about" => "Engenheira de Software com foco em desenvolvimento mobile,
                     formada pela UTF-PR com mais de 4 anos de experiência. Apaixonada
                     por criar aplicativos eficientes e intuitivos, trabalho com foco em
                     desempenho e design responsivo, sempre em busca de soluções que
                     aprimorem a experiência do usuário."
    ];
} elseif ($name == "Bernardo Carvalho"){
    $professional = [
        "name" => "Bernardo Carvalho",
        "photo" => "img/bernardo-carvalho.png",
        "portfolio" => "./img/portfolio-bernardo-carvalho.jpg",
        "about" => "Administrador de Redes formado em Redes de Computadores, com mais de 5 anos de
                     experiência na gestão de infraestrutura de redes. Especialista em segurança de redes
                     e monitoramento de desempenho, busco garantir a estabilidade e a eficiência dos
                     sistemas, otimizando recursos e protegendo dados críticos da empresa."
    ];
} elseif ($name == "Ricardo Santos"){
    $professional = [
        "name" => "Ricardo Santos",
        "photo" => "img/ricardo-santos.png",
        "portfolio" => "./img/portfolio-ricardo-santos.jpg",
        "about" => "Profissional formado em Análise de Redes, com mais de 6 anos de experiência
                     em Segurança de Redes. Tenho ampla experiência em proteção de dados,
                     monitoramento de sistemas e implementação de políticas de segurança. Sou
                     focado em garantir a integridade e a confidencialidade das informações
                     corporativas, prevenindo ameaças e otimizando a segurança da
                     infraestrutura de TI."
    ];
} elseif ($name == "julio Silveira"){
    $professional = [
        "name" => "Julio Silveira",
        "photo" => "img/julio-silveira.png",
        "portfolio" => "./img/portfolio-julio-silveira.jpg",
        "about" => "Cientista de Dados formado em Ciência de Dados, com 5 anos de
                     experiência em análise de grandes volumes de dados e
                     desenvolvimento de modelos preditivos. Tenho expertise em machine
                     learning, deep learning e análise estatística, e sou apaixonado por
                     transformar dados complexos em soluções práticas e valiosas para os
                     negócios. Busco sempre otimizar processos e promover inovação por
                     meio de insights extraídos de dados."
    ];
} elseif ($name == "Amanda Santana"){
    $professional = [
        "name" => "Amanda Santana",
        "photo" => "img/amanda-santana.png",
        "portfolio" => "./img/portfolio-amanda-santana.jpg",
        "about" => "Engenheira de Dados formada em Ciência de Dados,
                    com 4 anos de experiência no desenvolvimento e
                     otimização de sistemas de dados em larga escala.
                     Tenho forte conhecimento em ETL, modelagem de
                     dados e análise de grandes volumes de informações.
                     Sou apaixonada por transformar dados brutos em
                     insights valiosos, utilizando ferramentas de ponta e
                     soluções inovadoras estratégicas."
    ];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include './components/head.html';?>

<body class="d-flex flex-column min-vh-100">
    <?php include 'components/btConsultancyModal.html';?>
    <?php include 'components/btPortfolioModal.html';?>
    <?php include 'components/loggedHeader.html';?>
        <div class="card m-3 shadow d-md-flex text-center h-100">
            <div class="col-12 d-flex">
                <div class="col-4 col-md-2 mx-5 mt-5 d-flex flex-column">
                    <img class="rounded-circle mb-4"  src="<?= $professional['photo']; ?>">
                    <h1 class="fs-5"><?= $professional['name']; ?></h1>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center mx-auto text-center">
                    <a class="btn btn-primary text-white fw-semibold mb-3" onclick="changeButtonText()" id="followButton" style="background-color: #6393B9; border-color: #6393B9">Seguir</a>
                    <button type="button" class="btn btn-primary text-white fw-semibold" data-bs-toggle="modal" data-bs-target="#consultancyModal" style="background-color: #6393B9; border-color: #6393B9">
                        Consultoria
                    </button>
                </div>
            </div>
            <hr class="border-secondary border-2 opacity-100 mx-5" style="background-color: #6393B9; border-color: #6393B9">
            <div>
                <button type="button" class="btn btn-primary text-white fw-semibold col-6" data-bs-toggle="modal" data-bs-target="#portfolioModal" style="background-color: #6393B9; border-color: #6393B9">
                    Portfólios
                </button>
            </div>
            <div  class="mt-5 mx-4 mb-2">
                <h5>Sobre mim</h5>
                <p class="ms-2"><?= $professional['about']; ?></p>
            </div>
        </div>
    <?php require 'components/footer.html';?>
<script>
    function changeButtonText() {
        const button = document.getElementById("followButton");
        if (button) {
            button.innerText = "Seguindo"; // Define o novo texto do botão
            button.classList = "btn btn-primary text-white fw-semibold mb-3";
            button.disabled = true;
        }
    }
</script>
</body>

</html>