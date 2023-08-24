<!DOCTYPE html>
<html>
<head>
    <title>Maior e Menor Valor</title>
</head>
<body>
    <h2>Informe 5 valores</h2>
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Valor $i: <input type='number' name='values[]'><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['values'])) {
        $values = $_POST['values'];

        $min = min($values);
        $max = max($values);

        echo "<h2>Resultado:</h2>";
        echo "Menor valor: $min<br>";
        echo "Maior valor: $max<br>";
    }
    ?>
</body>
</html>
