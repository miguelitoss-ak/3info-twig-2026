<?php

require('carregar_twig.php');

$nome = 'Miguel';

$disciplinas = ['Programação', 'Banco de Dados', 'Interface Web', 'Desenvolvimento de Sistemas', 'Introdução a Computação'];

$poema = 
'O poeta é um fingidor.
Finge tão completamente
Que chega a fingir que é dor
A dor que deveras sente.

E os que lêem o que escreve,
Na dor lida sentem bem,
Não as duas que ele teve,
Mas só a que eles não têm.

E assim nas calhas da roda
Gira, a entreter a razão,
Esse comboio de corda
Que se chama o coração.'
;

echo $twig->render('teste_twig.html', ['nome' => $nome, 'legal' => true, 'disciplinas' => $disciplinas, 'poema' => $poema]);