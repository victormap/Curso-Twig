<?php
    // Nuevo comentario
	require_once __DIR__ . '/../config.php';

    $user = [
        'name' => 'víctor manuel',
        'lastname' => 'ares piñeiro',
        'email' => 'victormanuelap@gmail.com'
    ];

    // Determina si el sitio está online o en mantenimiento.
    $online = true;

    echo $twig->render('view.twig', compact('user', 'online'));
?>