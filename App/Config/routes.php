<?php

//ejemplo de obtencion del controlador de un objeto

$usersCollection = new \Phalcon\Mvc\Micro\Collection();
$usersCollection->setHandler('\App\Controllers\UsersController', true);
$usersCollection->setPrefix('/user');
$usersCollection->post('/add', 'addAction');
$usersCollection->get('/list', 'getUserListAction');
$usersCollection->put('/{userId:[1-9][0-9]*}', 'updateUserAction');
$usersCollection->delete('/{userId:[1-9][0-9]*}', 'deleteUserAction');
$app->mount($usersCollection);

//(en lo posible agregar un diferenciador, ej:EmpleadoCollection)
$Collection = new \Phalcon\Mvc\Micro\Collection();
$Collection->setHandler('\App\Controllers\(nombreControladorSinParentesis)Controller', true);
$Collection->setPrefix('/(insertar ruta sin parentesis)');
$Collection->post('/add', 'add(tabla)');
$Collection->get('/list', 'getList(tabla)');
$Collection->put('/{userId(:[1-9][0-9]* restricciones)}', 'update(tabla)');
$Collection->delete('/{userId(:[1-9][0-9]*)}', 'delete(tabla)');
$app->mount($Collection);


// si no se encuentran las urls
$app->notFound(
  function () use ($app) {
      $exception =
        new \App\Controllers\HttpExceptions\Http404Exception(
          _('URI not found or error in request.'),
          \App\Controllers\AbstractController::ERROR_NOT_FOUND,
          new \Exception('URI not found: ' . $app->request->getMethod() . ' ' . $app->request->getURI())
        );
      throw $exception;
  }
);