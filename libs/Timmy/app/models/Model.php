<?php

namespace Timmy;

use \Nette;
use \DibiConnection;

/**
 * Model base class.
 */
class Model extends Nette\Object
{
    /** @var Nette\Database\Connection */
    public $database;



    public function __construct(Nette\Database\Connection $database)
    {
        $this->database = $database;
    }



    public function createAuthenticatorService()
    {
        return new Authenticator($this->database->table('users'));
    }
    
    
    
    public function createDibiService($container)
    {
        if (!isset($container->params['database']['substitutes'])) {
            $container->params['database']['substitutes'] = array();
        }
        if (!isset($container->params['database']['substitutes']['prefix'])) {
            $container->params['database']['substitutes']['prefix'] = '';
        }
        
        $connection = new DibiConnection($container->params['database']);
        $connection->getSubstitutes()->{''} = $container->params['database']['substitutes']['prefix'];
        return $connection;
    }

}