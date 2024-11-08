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
            <p class="area-name">Desenvolvimento web</p>
        </div>
        <div class="area">
            <p class="ranking">2º</p>
            <p class="area-name">Desenvolvimento Mobile</p>
        </div>
        <div class="area">
            <p class="ranking">3º</p>
            <p class="area-name">DevOps</p>
        </div>
    </section>

    <section class="especialistas">
        <h2>Profissionais especialistas da área</h2>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">ELON</div>
            <div class="area-profissional">Desenvolvimento web</div>
        </div>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">Xandao</div>
            <div class="area-profissional">DevOps</div>
        </div>
        <div class="especialista">
            <div class="avatar"></div>
            <div class="nome">Xandao</div>
            <div class="area-profissional">Segurança de Redes</div>
        </div>
    </section>
</div>

<?php
// Inclui o footer com a estilização do Bootstrap
include 'components/footer.html';
?>
    