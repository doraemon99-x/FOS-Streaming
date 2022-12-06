<?php
include('_start.php');

$databasemanagar->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'panelo',
    'username'  => 'tipikusi_iptv',
    'password'  => '2QzMFPimCHgK',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$debug = false;

include('_load.php');
