<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/views');
$twig = new \Twig\Environment($loader);

$fruits = ['bananes', 'fraises', 'oranges', 'ananas', 'poires'];

echo $twig->render('index.html.twig', [
    'fruits' => $fruits
]);