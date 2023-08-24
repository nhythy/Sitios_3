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
    </body>
    </html>