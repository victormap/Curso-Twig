<?php
    // Comentario creado para luego subir el archivo a GitHub
	require_once '/usr/share/php/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_String();
    $twig = new Twig_Environment($loader);

    echo $twig->render('Hola {{ name }}', array('name' => 'Victor'));
?>