<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Consumo de Energia</title>
</head>
<body>
    <h2>Formulário de Consumo de Energia</h2>
    <?php
    class EnergyConsumptionForm {
        public function displayForm() {
            echo '<form method="post" action="' . $_SERVER['PHP_SELF'] . '">';
            echo '<label for="nome">Nome:</label>';
            echo '<input type="text" name="nome" required><br>';
            
            echo '<label>Sexo:</label>';
            echo '<input type="radio" name="sexo" value="masculino" required> Masculino';
            echo '<input type="radio" name="sexo" value="feminino" required> Feminino';
            echo '<input type="radio" name="sexo" value="não declarar" required> Não declarar<br>';
            
            echo '<label for="endereco">Endereço:</label>';
            echo '<input type="text" name="endereco" required><br>';
            
            echo '<label for="cep">CEP:</label>';
            echo '<input type="text" name="cep" required><br>';
            
            echo '<label for="bairro">Bairro:</label>';
            echo '<input type="text" name="bairro" required><br>';
            
            echo '<label for="cpf">CPF:</label>';
            echo '<input type="text" name="cpf" required><br>';
            
            echo '<label for="nascimento">Data de Nascimento:</label>';
            echo '<input type="date" name="nascimento" required><br>';
            
            echo '<label for="data_vencimento">Data de Vencimento:</label>';
            echo '<input type="date" name="data_vencimento" required><br>';
            
            echo '<label for="unidade_consumidora">Unidade Consumidora:</label>';
            echo '<input type="text" name="unidade_consumidora" required><br>';
            
            echo '<label for="email">E-mail:</label>';
            echo '<input type="email" name="email" required><br>';
            
            echo '<label for="Kwh">Kwh Consumidos:</label>';
            echo '<input type="number" name="Kwh" required><br>';
            
            echo '<label for="valor_total">Valor Total:</label>';
            echo '<input type="number" name="valor_total" required><br>';
            
            echo '<label for="site">Site:</label>';
            echo '<input type="url" name="site" pattern="https?://.+" title="Inclua http:// ou https://" required><br>';
            
            echo '<input type="submit" name="submit" value="Enviar">';
            echo '</form>';
        }

        public function calculateConsumption($Kwh, $valor_total) {
            $consumption = $Kwh;
            $cost = $valor_total;
            $consumptionCost = $cost / $consumption;
            return $consumptionCost;
        }

        public function displaySubmittedInfo() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST['nome'];
                $sexo = $_POST['sexo'];
                $endereco = $_POST['endereco'];
                $cep = $_POST['cep'];
                $bairro = $_POST['bairro'];
                $cpf = $_POST['cpf'];
                $nascimento = $_POST['nascimento'];
                $data_vencimento = $_POST['data_vencimento'];
                $unidade_consumidora = $_POST['unidade_consumidora'];
                $email = $_POST['email'];
                $Kwh = $_POST['Kwh'];
                $valor_total = $_POST['valor_total'];
                $site = $_POST['site'];

                $consumptionCost = $this->calculateConsumption($Kwh, $valor_total);

                echo "<h3>Informações Enviadas:</h3>";
                echo "<p><strong>Nome:</strong> $nome</p>";
                echo "<p><strong>Sexo:</strong> $sexo</p>";
                echo "<p><strong>Endereço:</strong> $endereco</p>";
                echo "<p><strong>CEP:</strong> $cep</p>";
                echo "<p><strong>Bairro:</strong> $bairro</p>";
                echo "<p><strong>CPF:</strong> $cpf</p>";
                echo "<p><strong>Data de Nascimento:</strong> $nascimento</p>";
                echo "<p><strong>Data de Vencimento:</strong> $data_vencimento</p>";
                echo "<p><strong>Unidade Consumidora:</strong> $unidade_consumidora</p>";
                echo "<p><strong>E-mail:</strong> $email</p>";
                echo "<p><strong>Kwh Consumidos:</strong> $Kwh</p>";
                echo "<p><strong>Valor Total:</strong> $valor_total</p>";
                echo "<p><strong>Site:</strong> $site</p>";
                echo "<p><strong>Custo por kWh:</strong> R$ $consumptionCost</p>";
            }
        }
    }

    $form = new EnergyConsumptionForm();

    $form->displayForm();
    $form->displaySubmittedInfo();
    ?>
</body>
</html>
