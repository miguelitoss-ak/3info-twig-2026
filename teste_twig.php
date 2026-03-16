<?php

require('carregar_twig.php');

$nome = 'Miguel';

$disciplinas = ['Programação', 'Banco de Dados', 'Interface Web', 'Desenvolvimento de Sistemas', 'Introdução a Computação'];

echo $twig->render('teste_twig.html', ['nome' => $nome, 'legal' => true, 'disciplinas' => $disciplinas,]);