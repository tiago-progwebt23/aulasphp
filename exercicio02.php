<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 02 (Corrigido)</title>
</head>
<body>
<h1>Exercício 02 (Corrigido)</h1>
<hr>
<?php
// Array associativo
$dados = [ // chave => valor
    "usuario" => "chapolin.colorado",
    "senha" => "qualquercoisa",
    "idade" => 30,
    "cidade" => "São Paulo"
];
?>
<h2>Saída de dados</h2>
<ol>
    <li> <?=$dados["usuario"] ?> </li>
    <li> <?=$dados["idade"]?> anos </li>
    <li> <?=$dados["cidade"]?> </li>
</ol>

</body>
</html>