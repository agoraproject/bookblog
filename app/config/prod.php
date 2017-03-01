<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'bookblog',
    'user'     => 'bookblog_user',
    'password' => 'secret',
);

// define log parameters
$app['monolog.level'] = 'WARNING';
