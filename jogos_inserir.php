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
        

        print_r('$_FILES');
        die;

        require('carregar_pdo.php');
        $dados = $pdo->prepare('INSERT INTO jogos(nome, estilo) VALUES (?,?)');

        $dados->bindParam(1, $nome);
        $dados->bindParam(2 , $estilo);

        $dados->execute();

        header('location:jogos.php');
        die;
    }
}
    

require('carregar_twig.php');

echo $twig->render('jogos_inserir.html' , [
    'erro' => $erro,
]);

