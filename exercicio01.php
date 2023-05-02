<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 01 (resolvido)</title>
</head>
<body>
<h1>Exercício 01 (resolvido)</h1>
<hr>

<?php
const PESSOA = "Chapolin";
$curso = "Gastronomia";
$cargaHoraria = 300;
$limiteDeFaltas = $cargaHoraria / 4; // * 0.25
?>

<p>O <b><?=PESSOA?></b> faz o curso de 
<b><?=$curso?></b> com carga horária de 
<b><?=$cargaHoraria?> horas</b>, com limite de faltas de
<b><?=$limiteDeFaltas?> horas.</b>
</p>



</body>
</html>