<!DOCTYPE html>
<html>
<head>
    <title>Pré-Cadastro de Vacinação</title>
</head>
<body>
    <h2>Pré-Cadastro de Vacinação contra a COVID-19</h2>
    <form method="post" action="">
        Informe sua idade: <input type="number" name="idade"><br>
        Escolha o dia de vacinação:
        <select name="dia">
            <option value="01">01 de março - 74 anos</option>
            <option value="02">02 de março - 73 anos</option>
            <option value="03">03 de março - 72 anos</option>
            <option value="04">04 de março - 71 anos</option>
            <option value="05">05 de março - 70 anos</option>
            <option value="08">08 de março - 69 anos</option>
            <option value="09">09 de março - 68 anos</option>
            <option value="10">10 de março - 67 anos</option>
            <option value="11">11 de março - 66 anos</option>
            <option value="12">12 de março - 65 anos</option>
        </select><br>
        <input type="submit" value="Pré-Cadastrar">
    </form>

    <?php
    if (isset($_POST['idade']) && isset($_POST['dia'])) {
        $idade = intval($_POST['idade']);
        $diaSelecionado = $_POST['dia'];

        $dataLimite = date('Y-m-d', strtotime("-$idade years"));

        $dataInicio = '2023-03-01'; // Início das datas de vacinação
        $dataVacina = date('Y-m-d', strtotime("$dataInicio +$diaSelecionado days"));

        if ($idade >= 65 && $dataVacina <= $dataLimite) {
            echo "<h2>Pré-cadastro realizado com sucesso!</h2>";
            echo "<p>Sua vacinação está agendada para o dia $dataVacina.</p>";
        } else {
            echo "<h2>Aguarde nova data para vacinação.</h2>";
        }
    }
    ?>
</body>
</html>
