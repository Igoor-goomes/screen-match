<?php 
// variável mágica
$filme = [
    'nome'          => $_POST['nome'],
    'anoLancamento' => $_POST['anoLancamento'],
    'nota'          => $_POST['nota'],
    'genero'        => $_POST['genero']
];

file_put_contents('filme.json', json_encode($filme));

header('Location: /sucesso.php?filme=' . $filme['nome']);
// header('Location: /sucesso.php?' . http_build_query($filme));
exit;


