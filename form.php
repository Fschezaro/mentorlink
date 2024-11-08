<!DOCTYPE html>
<html lang="pt-br">

<?php include './components/head.html'; ?>

<body>
<?php include 'components/header.html'; ?>
<form action="processa_form.php" method="POST">
    <div class="card shadow m-3 p-4">
        <h3 class="mb-4">Responda as perguntas</h3>

        <label class="fw-semibold">1. Você prefere trabalhar com desenvolvimento de software?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question1" value="sim" id="q1_1" required>
                <label class="form-check-label" for="q1_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question1" value="nao" id="q1_2" required>
                <label class="form-check-label" for="q1_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">2. Você se considera bom em programação?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question2" value="sim" id="q2_1" required>
                <label class="form-check-label" for="q2_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question2" value="nao" id="q2_2" required>
                <label class="form-check-label" for="q2_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">3. Você gosta de trabalhar em equipe?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question3" value="sim" id="q3_1" required>
                <label class="form-check-label" for="q3_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question3" value="nao" id="q3_2" required>
                <label class="form-check-label" for="q3_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">4. Você tem interesse em redes de computadores?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question4" value="sim" id="q4_1" required>
                <label class="form-check-label" for="q4_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question4" value="nao" id="q4_2" required>
                <label class="form-check-label" for="q4_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">5. Você gostaria de trabalhar com manutenção de redes?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question5" value="sim" id="q5_1" required>
                <label class="form-check-label" for="q5_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question5" value="nao" id="q5_2" required>
                <label class="form-check-label" for="q5_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">6. Você se sente confortável lidando com hardware?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question6" value="sim" id="q6_1" required>
                <label class="form-check-label" for="q6_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question6" value="nao" id="q6_2" required>
                <label class="form-check-label" for="q6_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">7. Você já teve experiência com análise de dados?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question7" value="sim" id="q7_1" required>
                <label class="form-check-label" for="q7_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question7" value="nao" id="q7_2" required>
                <label class="form-check-label" for="q7_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">8. Você se interessa por ciência de dados?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question8" value="sim" id="q8_1" required>
                <label class="form-check-label" for="q8_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question8" value="nao" id="q8_2" required>
                <label class="form-check-label" for="q8_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">9. Você gosta de trabalhar com algoritmos?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question9" value="sim" id="q9_1" required>
                <label class="form-check-label" for="q9_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question9" value="nao" id="q9_2" required>
                <label class="form-check-label" for="q9_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">10. Você gostaria de trabalhar com Big Data?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question10" value="sim" id="q10_1" required>
                <label class="form-check-label" for="q10_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question10" value="nao" id="q10_2" required>
                <label class="form-check-label" for="q10_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">11. Você tem interesse em aprender mais sobre machine learning?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question11" value="sim" id="q11_1" required>
                <label class="form-check-label" for="q11_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question11" value="nao" id="q11_2" required>
                <label class="form-check-label" for="q11_2">Não</label>
            </div>
        </div>

        <label class="fw-semibold mt-3">12. Você se vê trabalhando com análise de dados no futuro?</label>
        <div class="d-flex mt-2">
            <div class="form-check me-2">
                <input class="form-check-input" type="radio" name="question12" value="sim" id="q12_1" required>
                <label class="form-check-label" for="q12_1">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="question12" value="nao" id="q12_2" required>
                <label class="form-check-label" for="q12_2">Não</label>
            </div>
        </div>

        <input class="btn btn-success mt-4" type="submit" value="Enviar">
    </div>
</form>

<?php require 'components/footer.html'; ?>
</body>

</html>
