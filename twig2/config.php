<?php
	require_once __DIR__ . '/usr/share/php/Twig/Autoloader.php';
	Twig_Autoloader::register();

    define('APP_ROOT', __DIR__);

    $loader = new Twig_Loader_Filesystem(APP_ROOT . '/views');
    $twig = new Twig_Environment($loader);
?>