<!DOCTYPE html>
<html lang="pt-br">

<?php include './components/head.html';?>

<body>
<?php include 'components/loggedHeader.html';?>
<form action="result.php">
<div class="card shadow m-3 p-4">
    <h3 class="mb-4">Responda as perguntas</h3>
    <label class="fw-semibold">1.Você gosta de trabalhar em equipe para desenvolver projetos ou prefere tarefas mais individuais?</label>
    <div class="d-flex mt-2">
        <div class="form-check me-2">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Em equipe
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Individual
            </label>
        </div>
    </div>
    <label class="fw-semibold mt-2">2.Você gosta de investigar falhas de segurança e entender como os sistemas são invadidos?
    </label>
    <div class="d-flex mt-2">
        <div class="form-check me-2">
            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
                Sim
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
                Não
            </label>
        </div>
    </div>
    <label class="fw-semibold mt-2">3.Você gosta de analisar e propor melhorias na eficiência dos processos de uma equipe ou departamento?
    </label>
    <div class="d-flex mt-2">
        <div class="form-check me-2">
            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault5">
            <label class="form-check-label" for="flexRadioDefault5">
                Sim
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault6">
            <label class="form-check-label" for="flexRadioDefault6">
                Não
            </label>
        </div>
    </div>
    <label class="fw-semibold mt-2">4.Você gosta mais de resolver problemas complexos com lógica e matemática
    </label>
    <div class="d-flex mt-2">
        <div class="form-check me-2">
            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault7">
            <label class="form-check-label" for="flexRadioDefault7">
                Sim
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault8">
            <label class="form-check-label" for="flexRadioDefault8">
                Não
            </label>
        </div>
    </div>
    <label class="fw-semibold mt-2">5.Você se sente motivado em estudar as últimas ameaças e técnicas de defesa cibernética, como firewall, criptografia e autenticação multifatorial?
    </label>
    <input class="btn btn-success mt-4" type="submit" placeholder="Enviar">
</div>
</form>

<?php require 'components/footer.html';?>
</body>

</html>