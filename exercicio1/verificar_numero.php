<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Verificacao</title>
</head>
<body>
    <h1>Resultado da Verificacao</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        
        if ($numero > 0) {
            echo "<p>O numero $numero e positivo.</p>";
        } elseif ($numero < 0) {
            echo "<p>O numero $numero e negativo.</p>";
        } else {
            echo "<p>O numero e zero.</p>";
        }
    }
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>