<?php
require('carregar_twig.php');
require('carregar_pdo.php');

$jogos = $pdo->query('SELECT * from jogos');
$todosJogos = $jogos->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('jogos.html' , [
        'jogos' => $todosJogos,
]);