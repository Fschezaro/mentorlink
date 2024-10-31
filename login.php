<!DOCTYPE html>
<html lang="pt-br">

<?php include './components/head.html';?>

<body>
<?php include 'components/header.html';?>

<section class="principal">
    <div class="card p-5">
        <form>
            <label for="name">Login</label>
            <input class="form-control my-2" type="name">
            <label for="password">Senha</label>
            <input class="form-control my-2" type="password">
            <input class="btn btn-success my-2" type="submit">
        </form>
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