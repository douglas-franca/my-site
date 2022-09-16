<?php
    // Configurações gerais


    // Caminho para a pasta raiz do projeto
    define( 'ABSPATH', dirname('my-site'));

    // URL Home
    define( 'HOME_URL', 'http://localhost/my-site');

    // Se você estiver desenvolvendo, modifique o valor para true
    define( 'DEBUG', true );

    require_once ABSPATH . '/loader.php';
?>