<?php
/**
 * Created by PhpStorm.
 * User: Trey
 * Date: 12/14/2015
 * Time: 8:34 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'username' => 'tester',
    'password' => 'test123',
    'database' => 'testdb',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->bootEloquent();