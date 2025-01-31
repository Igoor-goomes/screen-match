<?php
$arquivoJson = file_get_contents('filme.json');
$filme = json_decode($arquivoJson, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
</head>
<body>
    <h1>Filme adicionado ao Screen Match</h1>
    <h3>Dados do Filme cadastrado:</h3>
    <ul>
        <li><strong>Nome:</strong> <?php echo $filme['nome']?></li>
        <li><strong>Ano de Lançamento:</strong> <?php echo $filme['anoLancamento']?></li>
        <li><strong>Nota:</strong> <?php echo $filme['nota']?></li>
        <li><strong>Gênero:</strong> <?php echo $filme['genero']?></li>
    </ul>
</body>
</html>