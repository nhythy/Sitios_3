<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
    <form method="post" action="">
        Digite um número: <input type="number" name="numero">
        <input type="submit" value="Mostrar Tabuada">
    </form>

    <?php
    // Verifica se um número foi enviado
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        echo "<h2>Tabuada do $numero:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>
