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
            <p class="area-name">Administração de Redes</p>
        </div>
        <div class="area">
            <p class="ranking">2º</p>
            <p class="area-name">Segurança de Redes</p>
        </div>
        <div class="area">
            <p class="ranking">3º</p>
            <p class="area-name">Cloud Computing</p>
        </div>
    </section>

    <section class="especialistas">
        <h2>Profissionais especialistas da área</h2>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">ELON MUSK</div>
            <div class="area-profissional">Cloud Computing</div>
        </div>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">Xandao</div>
            <div class="area-profissional">Segurança de Redes</div>
        </div>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">Jorge</div>
            <div class="area-profissional">Administração de Redes</div>
        </div>
    </section>
</div>

<?php
// Inclui o footer com a estilização do Bootstrap
include 'components/footer.html';
?>
    