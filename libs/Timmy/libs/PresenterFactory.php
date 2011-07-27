<?php

namespace Timmy;

use \Nette,
    \Nette\Application\InvalidPresenterException;

/**
 * PresenterFactory
 * add loading default presenters from namespace Timmy
 * 
 * @author     Michal Mikoláš <nanuqcz@gmail.com>
 * @package    Timmy   
 */
class PresenterFactory extends Nette\Application\PresenterFactory 
{

    /**
     * @param string $name
     * @return string          
     */         
    public function getPresenterClass(& $name)
    {
        try{
            $class = parent::getPresenterClass($name);
            
        } catch(InvalidPresenterException $e) {
            $class = 'Timmy\\' . $this->formatPresenterClass($name);
            if (!class_exists($class)) {
                throw new InvalidPresenterException($e->getMessage());
            }
        }

        return $class;
    }

} 