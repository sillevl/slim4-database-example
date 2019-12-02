<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['DB_DRIVER', 'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD']);

return [
  'paths' => [
    'migrations' => 'db/migrations',
    'seeds' => 'db/seeds'
  ],
  'environments' => [
    'default_migration_table' => 'phinxlog',
    'default_database' => 'dev',
    'dev' => [
      'adapter' => getenv('DB_DRIVER'),
      'host' => getenv('DB_HOST'),
      'name' => getenv('DB_NAME'),
      'user' => getenv('DB_USER'),
      'pass' => getenv('DB_PASSWORD'),
      'port' => 3306
    ]
  ]
];
