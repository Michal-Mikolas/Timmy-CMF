<?php

namespace Timmy;

use \Nette,
    \Nette\Caching\Cache,
    \Nette\Reflection;

/**
 * ExtensionsLoader
 * Autoloading and autosetup CMS extensions and models
 * 
 * @author     Michal Mikoláš <nanuqcz@gmail.com>             
 * @package    Timmy
 */ 
class ExtensionsLoader extends Nette\Object 
{
    /** @var Cache */
    protected $cache;
    
    /** @var \Nette\DI\Container */
    protected $context;
    
    /** @var string */
    protected $baseDir;

    

    public function __construct($baseDir, $context)
    {
        $this->baseDir = $baseDir;
        $this->context = $context;
        /** @todo invalidate cache */
        $this->cache = new Cache($this->context->cacheStorage, 'Timmy.ExtensionsLoader');
    }
    

    
    /**
     * Loads CMS extensions 
     * @return void        
     */
    public function load()
    {
        $interfaces = array(
            'Timmy\\IModel',
            'Timmy\\IServiceFactory',   /** @todo */ 
            'Timmy\\IRouterSetup',      /** @todo */
            'Timmy\\IControl',          /** @todo */
            'Timmy\\ISearchable',       /** @todo */
            'Timmy\\IInstallable',      /** @todo */
            'Timmy\\IGlobal',           /** @todo */
        );

        // Find classes in appDir folder 
        $classes = $this->loadClasses($this->baseDir, $interfaces);
        
        // Create models services
        foreach($classes['Timmy\\IModel'] as $class){
            $className = $class['class'];
            $this->context->addService($class['constants']['NAME'], function($container) use ($className){
                return $container->extensionsLoader->createService($className);
            });
        }
    }
    
    
    
    /**
     * Load classes that implements chosen extensions
     * @param string
     * @param array
     * @return array               
     */
    protected function loadClasses($baseDir, $interfaces)
    {
        if (isset($this->cache['classes'])) return $this->cache['classes'];
        
        $classes = array();
        foreach($interfaces as $interface){
            $classes[$interface] = array();
        }
        
        foreach($this->context->robotLoader->getIndexedClasses() as $class => $filename){
            if (strpos($filename, $baseDir) !== FALSE) {
                $this->filterClass($class, $interfaces, $classes);
            }
        }
        
        $this->cache['classes'] = $classes;
        
        return $classes;
    }
    
    
    
    /**
     * Filter class by their interfaces and add it to $classes array    
     * @param string
     * @param array
     * @param array 
     * @return void              
     */         
    protected function filterClass($class, $interfaces, & $classes)
    {
        $reflection = new Reflection\ClassType($class);
        $classInterfaces = array_keys( $reflection->getInterfaces() );
        
        foreach(array_intersect($classInterfaces, $interfaces) as $interface) {
            $classes[$interface][$class]['class'] = $reflection->getName();
            
            $classes[$interface][$class]['constants'] = array();
            $classes[$interface][$class]['constants']['NAME'] = $class::NAME;   /** @todo throw exception if constant not exists */
            
            $classes[$interface][$class]['arguments'] = array();
            foreach($reflection->getConstructor()->getParameters() as $parameter){
                $classes[$interface][$class]['arguments'][] = $parameter->name;
            }
        }
    }
      
    
    
    /**
     * Creates service with auto-assign constructor parameter values
     * @param string
     * @return mixed          
     */
    public function createService($class)
    {
        $reflection = new Reflection\ClassType($class);
        $args = array();
        foreach($reflection->getConstructor()->getParameters() as $param){
            $args[$param->name] = $this->getContainerArg($param->name);
        }
        
        return $reflection->newInstanceArgs($args);
    }
    
    
    
    /**
     * Find and return container service or param (services first)
     * @param string
     * @return mixed          
     */
    public function getContainerArg($arg)
    {
        if ($this->context->hasService($arg)) {
            return $this->context->$arg;
        }
        
        return $this->context->params[$arg]; 
    }                  

}
