<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Consumo de Energia</title>
</head>
<body>
    <h2>Resultado do Consumo de Energia</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $endereco = $_POST['endereco'];
        // ... Outros campos

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>Endereço:</strong> $endereco</p>";
        // ... Outros campos

        // Calcula o custo e exibe
    }
    ?>
</body>
</html>
