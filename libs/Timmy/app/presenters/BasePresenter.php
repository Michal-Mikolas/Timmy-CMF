<?php

namespace Timmy;

use \Nette\Diagnostics\Debugger;
use \Stopwatch;
use \Panel\Todo;
use \Panel\TimerPanel;


/**
 * Base class for all application presenters.
 *
 * @author     Michal Mikoláš <nanuqcz@gmail.com>
 * @package    Timmy
 */
class BasePresenter extends \Nette\Application\UI\Presenter
{  
       
    public function startup()
    {
        parent::startup();
        
        // Nette addons
        Debugger::addPanel(new Stopwatch());
        Todo::register($this->context->params['appDir']);
        TimerPanel::register($this->context->params['appDir']);
        
        // Services
        if (!$this->context->hasService('articlesModel')) {
            $this->context->addService('articlesModel', function($context){
                return new \Timmy\ArticlesModel($context->dibi);
            });
        }

        $this->context->addService('stopwatch', function(){
            return new Stopwatch();
        });

        $this->context->addService('dbTools', function($container){
            return new DbTools($container->dibi, $container->params['database']['substitutes']['prefix']);
        });
        
    }
    
    
    
    /**
     * Formats view template file names.
     * @return array
     */
    public function formatTemplateFiles()
    {
        $files = array();
        
        $template = '';
        if (isset($this->context->params['template'])) $template = $this->context->params['template'];
        
        // Template dir from config.neon
        if ($template) {
            $name = $this->getName();
            $presenter = substr($name, strrpos(':' . $name, ':'));              //Front:Articles » Articles
            $presenter = substr($presenter, strrpos('\\' . $presenter, '\\'));  //Timmy\Articles » Articles
            $dir = dirname(dirname($this->getReflection()->getFileName()));
            $files = array_merge($files, array(
                "$dir/templates/$template/$presenter/$this->view.latte",
                "$dir/templates/$template/$presenter.$this->view.latte",
                "$dir/templates/$template/$presenter/$this->view.phtml",
                "$dir/templates/$template/$presenter.$this->view.phtml",
            ));
        } else {
            $files = array_merge($files, parent::formatTemplateFiles());
        }
        
        // Default Timmy templates
        $dir = dirname(__DIR__);
        if ($this->getReflection()->getNamespaceName()) {
            $dir.= '/' . preg_replace('#^Timmy\\\\#', '', $this->getReflection()->getNamespaceName());
        }
        $files = array_merge($files, array(
            "$dir/templates/$presenter/$this->view.latte",
        ));
    
        return $files;
    }
    
    
  
    /**
     * Formats layout template file names.
     * @return array
     */
    public function formatLayoutTemplateFiles()
    {
        $list = array();
        
        $template = '';
        if (isset($this->context->params['template'])) $template = $this->context->params['template'];
        
        // Template dir from config.neon
        if ($template) {
            $name = $this->getName();
            $presenter = substr($name, strrpos(':' . $name, ':'));
            $layout = $this->layout ? $this->layout : 'layout';
            $dir = dirname(dirname($this->getReflection()->getFileName()));
            $list = array_merge($list, array(
                "$dir/templates/$template/$presenter/@$layout.latte",
                "$dir/templates/$template/$presenter.@$layout.latte",
                "$dir/templates/$template/$presenter/@$layout.phtml",
                "$dir/templates/$template/$presenter.@$layout.phtml",
            ));
            do {
                $list[] = "$dir/templates/$template/@$layout.latte";
                $list[] = "$dir/templates/$template/@$layout.phtml";
                $dir = dirname($dir);
            } while ($dir && ($name = substr($name, 0, strrpos($name, ':'))));
        } else {
            $list = array_merge($list, parent::formatLayoutTemplateFiles());
        }
        
        // Default Timmy templates
        $dir = dirname(__DIR__);
        if ($this->getReflection()->getNamespaceName()) {
            $dir.= '/' . preg_replace('#^Timmy\\\\#', '', $this->getReflection()->getNamespaceName());
        }
        $list = array_merge($list, array(
            "$dir/templates/@$layout.latte",
        ));
        
        return $list;
    }

}