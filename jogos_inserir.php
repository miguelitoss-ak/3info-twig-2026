<?php
$erro = false;

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $nome = $_POST['nome'] ?? false;
    $estilo = $_POST['estilo'] ?? false;

    //verifica erro
    if (!$nome || !$estilo){
        $erro = 'Preencha todos os campos';
    }else{
        //se der certo
    }
}
    

require('carregar_twig.php');

echo $twig->render('jogos_inserir.html' , [
    'erro' => $erro,
]);

