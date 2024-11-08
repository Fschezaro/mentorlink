<?php
// Inclui o head (contendo Bootstrap e CSS principal)
include 'components/head.html';
// Inclui o header com o logo e links principais
include 'components/header.html';
?>

<div class="container">
    <section class="areas">
        <div class="area">
            <p class="ranking">1º</p>
            <p class="area-name">Ciência de Dados</p>
        </div>
        <div class="area">
            <p class="ranking">2º</p>
            <p class="area-name">Engenharia de Dados</p>
        </div>
        <div class="area">
            <p class="ranking">3º</p>
            <p class="area-name">Big Data</p>
        </div>
    </section>

    <section class="especialistas">
        <h2>Profissionais especialistas da área</h2>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">ELON</div>
            <div class="area-profissional">Big Data</div>
        </div>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">Xandao</div>
            <div class="area-profissional">Engenharia de Dados</div>
        </div>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">Jorge</div>
            <div class="area-profissional">Ciência de Dados</div>
        </div>
    </section>
</div>

<?php
// Inclui o footer com a estilização do Bootstrap
include 'components/footer.html';
?>
    