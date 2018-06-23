<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$config = require_once 'Application/Common/Conf/config.php';

$isDevMoe = true;
$configuration = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/Application/Entity'], $isDevMoe);

$conn = [
    'driver' => 'pdo_mysql',
    'user' => $config['DB_USER'] ? $config['DB_USER'] : ' root',
    'password' => $config['DB_PWD'] ? $config['DB_PWD'] : '',
    'dbname' => $config['DB_NAME'] ? $config['DB_NAME'] : 'thinkphp50',
    'port' => $config['DB_PORT'] ? $config['DB_PORT'] : 3306,
    'charset' => 'utf8'
];

$entityManager = EntityManager::create($conn, $configuration);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);