<?php
  
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$dcn = defined('DB_CONNECTION_NAME') ? DB_CONNECTION_NAME : 'default';

$capsule->addConnection(array(
    'driver'    => DB_DRIVER,
    'host'      => DB_HOST,
    'database'  => DB_CATALOG,
    'username'  => DB_USERNAME,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATION,
    'prefix'    => DB_PREFIX,
), $dcn);

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
