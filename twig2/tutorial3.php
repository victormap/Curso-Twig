<?php
	require_once '/usr/share/php/Twig/Autoloader.php';
	Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('./views');
    $twig = new Twig_Environment($loader);

    echo $twig->render('index2.twig');
?>