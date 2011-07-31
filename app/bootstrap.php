<?php

/**
 * Timmy CMF bootstrap file.
 */

use Nette\Diagnostics\Debugger,
    Nette\Application\Routers\Route,
    Nette\Application\Routers\RouteList;
use Timmy\NamespaceRoute;


// Load Nette Framework
$params['libsDir'] = __DIR__ . '/../libs';
require $params['libsDir'] . '/Nette/loader.php';


// Enable Nette Debugger for error visualisation & logging
Debugger::$logDirectory = __DIR__ . '/../log';
Debugger::$strictMode = TRUE;
Debugger::enable();


// Load configuration from config.neon file
$configurator = new Nette\Configurator;
$configurator->container->params += $params;
$configurator->container->params['tempDir'] = __DIR__ . '/../temp';
$container = $configurator->loadConfig(__DIR__ . '/config.neon');

$container->timmyLoader->load();  //loads Timmy CMF core


// Setup router
$router = $container->router;

//default Timmy routers
$router[] = $frontRouter = new RouteList('Front');
$frontRouter[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
$frontRouter[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');


// Configure and run the application!
$application = $container->application;
//$application->catchExceptions = TRUE;
$application->errorPresenter = 'Error';
$application->run();
