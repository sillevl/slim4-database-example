<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Models\User;

use Slim\App;

return function (App $app) {
  $app->post('/user', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $user = User::create($data);
    $user->save();
    return $response;
  });

  $app->get('/user', function (Request $request, Response $response) {
    $users = User::all();
    $jsonUsers = json_encode($users);
    $response->getBody()->write($jsonUsers);
    return $response;
  });

  $app->get('/user/{id}', function (Request $request, Response $response, $args) {
    $user = User::find($args['id']);
    if ($user == null) {
      return $response->withStatus(404);
    }
    $jsonUser = json_encode($user);
    $response->getBody()->write($jsonUser);
    return $response;
  });

  $app->delete('/user/{id}', function (Request $request, Response $response, $args) {
    $user = User::find($args['id']);
    if ($user == null) {
      return $response->withStatus(404);
    }
    $user->delete();
    return $response;
  });

  $app->put('/user/{id}', function (Request $request, Response $response, $args) {
    $user = User::find($args['id']);
    if ($user == null) {
      return $response->withStatus(404);
    }
    $data = $request->getParsedBody();
    $user->fill($data);
    $user->save();
    return $response;
  });
};