<?php
require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

//Register routes
$router->add('GET', '/students', 'StudentController', 'index');
$router->add('GET', '/students/create', 'StudentController', 'create');
$router->add('GET', '/students/{id}', 'StudentController', 'show');
$router->add('GET', '/students/{id}/edit', 'StudentController', 'edit');

$router->add('POST', '/students','StudentController','store');
$router->add('PUT', '/students/{id}', 'StudentController', 'update'); //bisa pakai  PUT (ubah 1 tabel) ataupun PATCH (pas ubah 1 kolom)
$router->add('DELETE', '/students/{id}', 'StudentController', 'destroy');

$router->run();
?>