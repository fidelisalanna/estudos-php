<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Comissao</title>
</head>
<body>
    <h1>Resultado da Comissao</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario_fixo = $_POST["salario_fixo"];
        $vendas = $_POST["vendas"];
        
        // Calcula a comissao (4% das vendas)
        $comissao = 0.04 * $vendas;
        
        // Calcula o salario final (salario fixo + comissao)
        $salario_final = $salario_fixo + $comissao;
    }
        
        echo "<p>Salario Fixo: R$ $salario_fixo</p>";
        echo "<p>Vendas: R$ $vendas</p>";
       
