<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da area do Trapezio</title>
</head>
<body>
    <h1>Resultado da area do Trapezio</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base_maior = $_POST["base_maior"];
        $base_menor = $_POST["base_menor"];
        $altura = $_POST["altura"];
        
        // Calcula a area do trapezio
        $area = (($base_maior + $base_menor) / 2) * $altura;
        
        echo "<p>Base Maior: $base_maior</p>";
        echo "<p>Base Menor: $base_menor</p>";
        echo "<p>Altura: $altura</p>";
        echo "<p>area do Trapezio: $area</p>";
    }
    ?>
</body>
</html>
