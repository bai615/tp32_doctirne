<?php
namespace Entity;

require_once APP_PATH.'../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Entity
{
    public static function getEntityManager()
    {
        $isDevMoe = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(APP_PATH . '/Entity'), $isDevMoe);
        $conn = [
            'driver' => 'pdo_mysql',
            'user' => C('DB_USER') ? C('DB_USER') : ' root',
            'password' => C('DB_PWD') ? C('DB_PWD') : '',
            'dbname' => C('DB_NAME') ? C('DB_NAME') : 'thinkphp50',
            'port' => C('DB_PORT') ? C('DB_PORT') : 3306,
            'charset' => 'utf8'
        ];
        return EntityManager::create($conn, $config);
    }
}