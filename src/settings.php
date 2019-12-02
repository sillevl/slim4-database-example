<?php
declare(strict_types=1);

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
$dotenv->required(['DB_DRIVER', 'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD']);

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Global Settings Object
    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true, // Should be set to false in production
            'db' => [
                'driver' => getenv('DB_DRIVER'),
                'host' => getenv('DB_HOST'),
                'database' => getenv('DB_NAME'),
                'username' => getenv('DB_USER'),
                'password' => getenv('DB_PASSWORD')
              ]
        ],
    ]);
};