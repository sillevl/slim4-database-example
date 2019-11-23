<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

return function (ContainerBuilder $containerBuilder) {   
    $containerBuilder->addDefinitions([
      Capsule::class => function (ContainerInterface $c) {
          $settings = $c->get('settings');
          $eloquent = new Capsule;
          $eloquent->addConnection($settings['db']);
          // Make this Capsule instance available globally via static methods
          $eloquent->setAsGlobal();
          // Setup the Eloquent ORM...
          $eloquent->bootEloquent();
          // Set the fetch mode to return associative arrays.
          $eloquent->setFetchMode(PDO::FETCH_ASSOC);

        //   $app->withEloquent();
          return $eloquent;

        // $c['db'] = function ($c) use ($capsule) {
        //     return $capsule;
        // };
      }
    ]);
};