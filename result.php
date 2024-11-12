<?php
if (!isset($_GET['area'])){
    header('Location: index.php');
}
$area = $_GET['area'];
if ($area == "desenvolvimento"){
    $subarea = [
        1 => "Desenvolvimento web",
        2 => "Desenvolvimento Mobile",
        3 => "DevOps"
    ];
    $professional1 = [
        "name" => "Matheus Camargo",
        "photo" => "img/matheus-camargo.png"
    ];
    $professional2 = [
        "name" => "Ana Mônica",
        "photo" => "img/ana-monica.png"
    ];

} elseif ($area == "redes"){
    $subarea = [
        1 => "Administração de Redes",
        2 => "Segurança de Redes",
        3 => "Cloud Computing"
    ];
    $professional1 = [
        "name" => "Bernardo Carvalho",
        "photo" => "img/bernardo-carvalho.png"
    ];
    $professional2 = [
        "name" => "Ricardo Santos",
        "photo" => "img/ricardo-santos.png"
    ];
} else {
    $subarea = [
        1 => "Ciência de Dados",
        2 => "Engenharia de Dados",
        3 => "Big Data"
    ];
    $professional1 = [
        "name" => "julio Silveira",
        "photo" => "img/julio-silveira.png"
    ];
    $professional2 = [
        "name" => "Amanda Santana",
        "photo" => "img/amanda-santana.png"
    ];
}

include 'components/head.html';
include 'components/loggedHeader.html';
?>

<div class="card shadow p-2 m-2 mt-4 text-center">
    <div>
        <p class="fw-semibold fs-5">Subáreas que recomendamos para você </p>
        <div class="mb-3 rounded-pill text-center bg-primary-subtle text-primary-emphasis">
            <p class="p-3">1º  <?= $subarea[1] ?></p>
        </div>
        <div class="mb-3 rounded-pill text-center bg-primary-subtle text-primary-emphasis">
            <p class="p-3">2º  <?= $subarea[2] ?></p>
        </div>
        <div class="rounded-pill text-center bg-primary-subtle text-primary-emphasis">
            <p class="p-3">3º  <?= $subarea[3] ?></p>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-4">
        <p class="fw-semibold fs-4">Profissionais especialistas da área</p>
        <div class="card d-flex align-items-center shadow mb-4 p-3 w-75 h-50">
            <a href="<?php echo "profile.php?name=".$professional1['name']; ?>" style="text-decoration: none">
            <img class="rounded-circle" src="<?= $professional1['photo']; ?>" width="40%">
            <p class="text-black fs-5 m-2"><?= $professional1['name']; ?></p>
            </a>
        </div>

        <div class="card d-flex align-items-center shadow mb-4 p-3 w-75 h-50">
            <a href="<?php echo "profile.php?name=".$professional2['name']; ?>" style="text-decoration: none">
            <img class="rounded-circle" src="<?= $professional2['photo']; ?>" width="40%">
            <p class="text-black fs-5 m-2"><?= $professional2['name']; ?></p>
            </a>
        </div>
    </div>
</div>
<?php include 'components/footer.html';?>
    