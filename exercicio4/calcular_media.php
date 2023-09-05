<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Calculo de Media</title>
</head>
<body>
    <h1>Resultado do Calculo de Media</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeAluno = $_POST["nomeAluno"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $media = ($nota1 + $nota2) / 2;

        echo "<p>O aluno $nomeAluno ficou com " . number_format($media, 1) . " de media.</p>";
    }
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>