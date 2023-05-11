<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (corrigido)</title>
</head>
<body>
    <h1>Exercício 04 (formulário - corrigido)</h1>
    <hr>
    <form autocomplete="off" action="exercicio04-dados.php" method="post">
        <p>
            <label for="produto">Produto:</label>
            <input required type="text" name="produto" id="produto">
        </p>
<?php
$fabricantes = ["Dell", "Asus", "LG", "Microsoft", "Acer", "Positivo"];
?>        
<p>
    <label for="fabricante">Fabricante:</label>
    <select name="fabricante" id="fabricante">
        <option value=""></option>
    <?php foreach( $fabricantes as $fabricante ) { ?>    
        <option> <?=$fabricante?> </option>
    <?php } ?>    
    </select>
</p>

		<p>
            <label for="preco">Preço:</label>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>
</html>