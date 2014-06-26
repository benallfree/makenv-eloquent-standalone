<?php
  
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection(array(
    'driver'    => DB_DRIVER,
    'host'      => DB_HOST,
    'database'  => DB_CATALOG,
    'username'  => DB_USERNAME,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATION,
    'prefix'    => DB_PREFIX,
), DB_CONNECTION_NAME);

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
