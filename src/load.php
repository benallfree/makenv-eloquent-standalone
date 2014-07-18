<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentLoader
{
  static public function init()
  {

    \Dotenv::required(array(
      'DB_CONNECTION_NAME',
      'DB_DRIVER',
      'DB_HOST',
      'DB_CATALOG',
      'DB_USERNAME',
      'DB_PASSWORD',
      'DB_CHARSET',
      'DB_COLLATION',
      'DB_PREFIX',
    ));

    $capsule = new Capsule;

    $dcn = defined('DB_CONNECTION_NAME') ? $_ENV['DB_CONNECTION_NAME'] : 'default';

    $capsule->addConnection(array(
        'driver'    => $_ENV['DB_DRIVER'],
        'host'      => $_ENV['DB_HOST'],
        'database'  => $_ENV['DB_CATALOG'],
        'username'  => $_ENV['DB_USERNAME'],
        'password'  => $_ENV['DB_PASSWORD'],
        'charset'   => $_ENV['DB_CHARSET'],
        'collation' => $_ENV['DB_COLLATION'],
        'prefix'    => $_ENV['DB_PREFIX'],
    ), $dcn);

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();
  }
}

