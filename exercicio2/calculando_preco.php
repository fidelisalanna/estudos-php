<!DOCTYPE html>
<html>
<head>
    <title>Preco ao Consumidor</title>
</head>
<body>
    <h1>Preco ao Consumidor</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $custoFabrica = $_POST["custoFabrica"];
        $precoConsumidor = 0;

        if ($custoFabrica <= 39.999) {
            $precoConsumidor = $custoFabrica * 1.05; // 5% de Distribuidor
        } elseif ($custoFabrica >= 40.000 && $custoFabrica <= 69.999) {
            $precoConsumidor = $custoFabrica * 1.10 * 1.15; // 10% de Distribuidor e 15% de Imposto
        } else {
            $precoConsumidor = $custoFabrica * 1.15 * 1.20; // 15% de Distribuidor e 20% de Imposto
        }

        echo "<p>O preco ao consumidor e: R$ " . number_format($precoConsumidor, 2, ',', '.') . "</p>";
    }
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>