<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$dbcfg['prod']= array(
        'driver'    => 'mysql',
        'host'      => 'mariadb',
        'database'  => 'dbname',
        'username'  => 'dbuname',
        'password'  => 'dbpwd',
        'charset'   => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix'    => ''
    );

$dbcfg['test']= array(
    'driver'    => 'mysql',
    'host'      => 'mariadb',
    'database'  => 'dbname',
    'username'  => 'dbuname',
    'password'  => 'dbpwd',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => ''
    );
$capsule = new Capsule; 

$capsule->addConnection($dbcfg[ENV]);
/*
// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));
*/
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
//enable Query log for debug!
$capsule::connection()->enableQueryLog();
