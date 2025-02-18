<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $req = json_encode($request, 1);
    $response->getBody()->write($req);
    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();
