<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (corrigido)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento 
- corrigido)</h1>
<hr>

<?php
// Pegar os dados do formulário
$produto = $_POST['produto'];
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
?>

<h2>Dados</h2>
<p>Produto: <?=$produto?></p>
<p>Fabricante: <?=$fabricante?></p>
<p>Preço: <?=$preco?></p>
<p>Descrição: <?=$descricao?></p>
    
</body>
</html>