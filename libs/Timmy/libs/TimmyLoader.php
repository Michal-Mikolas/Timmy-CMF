<?php

namespace Timmy;

use \Nette, 
    \Nette\Configurator;

/**
 * PresenterFactory
 * add loading default presenters from namespace Timmy
 * 
 * @author     Michal Mikoláš <nanuqcz@gmail.com>
 * @package    Timmy   
 */
class TimmyLoader extends Nette\Object
{

    public function load()
    {
        $configurator = Configurator::$instance;
        $container = $configurator->loadConfig(dirname(__DIR__) . '/app/config.neon');
        
        //$container->extensionsLoader->load();
    }

} 