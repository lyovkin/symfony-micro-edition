<?php

require_once __DIR__ . '/../app/MicroKernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new MicroKernel('prod', false);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
