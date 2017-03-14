<?php
	require_once '/usr/share/php/Twig/Autoloader.php';
	Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('./views');
    $twig = new Twig_Environment($loader);

    $person = [
        'name' => 'Víctor Manuel',
        'age' => '47',
        'name-company' => 'adsiar'
    ];

    echo $twig->render('index3.twig', compact('person'));
?>