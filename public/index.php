<<<<<<< HEAD
<?php

=======

<?php

use App\Controllers\AbstractHttpException;

>>>>>>> axel
try {
  // Loading Configs
  $config = require(__DIR__ . '/../app/config/config.php');

  // Autoloading classes
  require __DIR__ . '/../app/config/loader.php';

  // Initializing DI container
  /** @var \Phalcon\DI\FactoryDefault $di */
  $di = require __DIR__ . '/../app/config/di.php';

  // Initializing application
  $app = new \Phalcon\Mvc\Micro();

  // Setting DI container
  $app->setDI($di);

  // Setting up routing
  require __DIR__ . '/../app/config/routes.php';

<<<<<<< HEAD
  // Making the correct answer after executing
=======
 // Making the correct answer after executing
>>>>>>> axel
  $app->after(
    function () use ($app) {
      // Getting the return value of method
      $return = $app->getReturnedValue();

      if (is_array($return)) {
        // Transforming arrays to JSON
        $app->response->setContent(json_encode($return));
      } elseif (!strlen($return)) {
        // Successful response without any content
        $app->response->setStatusCode('204', 'No Content');
      } else {
        // Unexpected response
        throw new Exception('Bad Response');
      }

      // Sending response to the client
      $app->response->send();
    }

<<<<<<< HEAD
  // Processing request
=======
 // Processing request
>>>>>>> axel
  $app->handle();
} catch (AbstractHttpException $e) {
  $response = $app->response;
  $response->setStatusCode($e->getCode(), $e->getMessage());
  $response->setJsonContent($e->getAppError());
  $response->send();
} catch (\Phalcon\Http\Request\Exception $e) {
  $app->response->setStatusCode(400, 'Bad request')
                ->setJsonContent([
                  AbstractHttpException::KEY_CODE    => 400,
                  AbstractHttpException::KEY_MESSAGE => 'Bad request'
                ])
                ->send();
} catch (\Exception $e) {
  // Standard error format
  $result = [
    AbstractHttpException::KEY_CODE    => 500,
    AbstractHttpException::KEY_MESSAGE => 'Some error occurred on the server.'
  ];

  // Sending error response
  $app->response->setStatusCode(500, 'Internal Server Error')
                ->setJsonContent($result)
                ->send();
<<<<<<< HEAD
}
=======
}

//////////////////////////////////////////////////
>>>>>>> axel
