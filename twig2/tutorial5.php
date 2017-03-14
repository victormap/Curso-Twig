<?php
	require_once '/usr/share/php/Twig/Autoloader.php';
	Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('./views');
    $twig = new Twig_Environment($loader);

    $user = [
        'name' => 'víctor manuel',
        'lastname' => 'ares piñeiro',
        'email' => 'victormanuelap@gmail.com'
    ];

    echo $twig->render('index4.twig', compact('user'));
?>