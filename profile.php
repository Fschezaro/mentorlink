<!DOCTYPE html>
<html lang="pt-br">

<?php include './components/head.html';?>

<body class="d-flex flex-column min-vh-100">
    <?php include 'components/btConsultancyModal.html';?>
    <?php include 'components/btPortfolioModal.html';?>
    <?php include 'components/loggedHeader.html';?>
        <div class="card m-3 shadow d-md-flex text-center">
            <div class="col-12 d-flex">
                <div class="col-4 col-md-2 mx-5 mt-5 d-flex flex-column">
                    <img class="rounded-circle mb-4"  src="./img/br-author-joaopedro.png">
                    <h1 class="fs-5">João Mendes</h1>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center mx-auto text-center">
                    <a class="btn btn-info text-white fw-semibold mb-3" style="background-color: #6528e0; border-color: #6528e0">Seguir</a>
<!--                    <a class="btn btn-info text-white fw-semibold" style="background-color: #6528e0; border-color: #6528e0">Consultoria</a>-->
                    <button type="button" class="btn btn-info text-white fw-semibold" data-bs-toggle="modal" data-bs-target="#consultancyModal" style="background-color: #6528e0; border-color: #6528e0">
                        Consultoria
                    </button>
                </div>
            </div>
            <hr class="border  border-2 opacity-100 mx-5" style="">
            <div>
                <button type="button" class="btn btn-info text-white fw-semibold col-6" data-bs-toggle="modal" data-bs-target="#portfolioModal" style="background-color: #6528e0; border-color: #6528e0">
                    Portfólios
                </button>
            </div>
            <div  class="my-5 mx-4">
                <h5>Sobre mim</h5>
                <p>Sou um profissional com sólida experiência em redes de computadores, apaixonado por garantir que as conexões
                    funcionem de forma rápida e segura. Ao longo dos anos, tenho me dedicado a instalar e configurar redes, sempre
                    atento para resolver qualquer problema que apareça e melhorar a comunicação entre os sistemas.</p>
            </div>
        </div>
    <?php require 'components/footer.html';?>
</body>

</html>