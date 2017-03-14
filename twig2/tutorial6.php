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

    // Determina si el sitio está online o en mantenimiento.
    $online = true;

    echo $twig->render('index5.twig', compact('user', 'online'));
?>