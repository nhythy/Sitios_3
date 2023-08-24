<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Compra</title>
</head>
<body>
    <h2>Selecione os produtos desejados:</h2>
    <form method="post" action="">
        <input type="checkbox" name="produtos[]" value="Arroz 5 Kg"> Arroz 5 Kg (R$ 25,90)<br>
        <input type="checkbox" name="produtos[]" value="Caixa de óleo de soja com 10"> Caixa de óleo de soja com 10 (R$ 89,90)<br>
        <input type="checkbox" name="produtos[]" value="Fardo guaraná Kuat 8 unidades"> Fardo guaraná Kuat 8 unidades (R$ 34.90)<br>
        <input type="checkbox" name="produtos[]" value="Feijão carioquinha 10 Kg"> Feijão carioquinha 10 Kg (R$ 38,50)<br>
        <input type="checkbox" name="produtos[]" value="Açucar mascavo 5kg"> Açucar mascavo 5kg (R$ 12,90)<br>
        <input type="checkbox" name="produtos[]" value="Fardo café com 10 unidades"> Fardo café com 10 unidades (R$ 78,90)<br>
        <input type="submit" value="Calcular Total">
    </form>

    <?php
    $produtos = array(
        "Arroz 5 Kg" => 25.90,
        "Caixa de óleo de soja com 10" => 89.90,
        "Fardo guaraná Kuat 8 unidades" => 34.90,
        "Feijão carioquinha 10 Kg" => 38.50,
        "Açucar mascavo 5kg" => 12.90,
        "Fardo café com 10 unidades" => 78.90
    );

    if (isset($_POST['produtos'])) {
        $selectedProducts = $_POST['produtos'];
        $total = 0;

        echo "<h2>Produtos selecionados:</h2>";
        echo "<ul>";
        foreach ($selectedProducts as $product) {
            echo "<li>$product</li>";
            $total += $produtos[$product];
        }
        echo "</ul>";
        
        echo "<h2>Total da compra: R$ " . number_format($total, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
