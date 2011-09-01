<?php

namespace Timmy;

use \Nette\Diagnostics\Debugger,
    \Nette\Application\InvalidLinkException;


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
        if (class_exists('\\Stopwatch')) Debugger::addPanel(new \Stopwatch());
        if (class_exists('\\Panel\\Todo')) \Panel\Todo::register($this->context->params['appDir']);
        if (class_exists('\\Panel\\TimerPanel')) \Panel\TimerPanel::register($this->context->params['appDir']);
    }
    
    
    
    /**
     * @return LinksControl
     */         
    public function createComponentLinks()
    {
        return new LinksControl($this->context->linksModel);
    }
    
    
    
    /**
     * Formats view template file names.
     * @return array
     */
    public function formatTemplateFiles()
    {
        $files = array();
        $template = isset($this->context->params['template'])? $this->context->params['template']: '';
        $presenter = substr($this->name, strrpos(':' . $this->name, ':'));  //Front:Articles » Articles
        $presenter = substr($presenter, strrpos('\\' . $presenter, '\\'));  //Timmy\Articles » Articles
        
        // 1) Templates in sub-directory (from config.neon)
        if ($template) {
            $dir = dirname(dirname($this->getReflection()->getFileName()));
            $files = array_merge($files, array(
                "$dir/templates/$template/$presenter/$this->view.latte",
                "$dir/templates/$template/$presenter.$this->view.latte",
                "$dir/templates/$template/$presenter/$this->view.phtml",
                "$dir/templates/$template/$presenter.$this->view.phtml",
            ));
        }
        
        // 2) Default Nette directories
        $files = array_merge($files, parent::formatTemplateFiles());
        
        // 3) Default Timmy templates
        $dir = dirname(__DIR__);
        if ($this->getReflection()->getNamespaceName()) 
            $dir.= '/' . preg_replace('#^Timmy\\\\#', '', $this->getReflection()->getNamespaceName());
        
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
        $template = isset($this->context->params['template'])? $this->context->params['template']: '';
        $presenter = substr($this->name, strrpos(':' . $this->name, ':'));
        $presenter = substr($presenter, strrpos('\\' . $presenter, '\\'));  //Timmy\Articles » Articles
        $layout = $this->layout? $this->layout: 'layout';
        
        // 1) Templates in sub-directory (from config.neon)
        if ($template) {
            $dir = dirname(dirname($this->getReflection()->getFileName()));
            $name = $this->getName();
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
        }

        // 2) Default Nette directories
        $list = array_merge($list, parent::formatLayoutTemplateFiles());
        
        // 3) Default Timmy templates
        $dir = dirname(__DIR__);
        if ($this->getReflection()->getNamespaceName())
            $dir.= '/' . preg_replace('#^Timmy\\\\#', '', $this->getReflection()->getNamespaceName());
        $name = $this->getName();

        do {
            $list = array_merge($list, array(
                "$dir/templates/@$layout.latte",
            ));
            $dir = dirname($dir);
        } while ($dir && ($name = substr($name, 0, strrpos($name, ':'))));
        
        return $list;
    }
    
    
    
    /**
     * @param string
     * @return bool
     * 
     * @todo zkontrolovat, jestli na to už není podpora v Nette          
     */           
    public function isCurrent($destination, $args = array())
    {
        try{ $this->link($destination, $args); } 
        catch (InvalidLinkException $e) {};
         
        return $this->getLastCreatedRequestFlag("current");
    }

}