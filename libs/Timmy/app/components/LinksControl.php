<?php

namespace Timmy;

use \Nette\Templating\FileTemplate;
use \Timmy\LinksModel;

/**
 * LinksControl
 * control to render links tree, filtered with various conditions
 * 
 * @author     Michal Mikoláš <nanuqcz@gmail.com>             
 * @package    Timmy
 */ 
class LinksControl extends Nette\Application\UI\Control 
{
    /** @var string */
    protected $templateFile;
    
    /** @var FileTemplate */
    protected $template;
    
    /** @var LinksModel */
    protected $linksModel;
    
    /** @todo public $filters; */

    
    public function __construct(LinksModel $linksModel)
    {
        parent::__construct();
        
        $this->templateFile = __DIR__ . '/LinksControl.latte';
        $this->linksModel = $linksModel;
    }
    
    
    
    /**
     * @param string $id  id of link, whose childs have to be rendered
     * @return void     
     */         
    public function render($id)
    {
        $this->template = $this->getTemplate();
        $this->template->setFile($this->templateFile);
        
        $this->template->link = $this->linksModel->getLink($id);  /** @todo vymyslet lepší název */
        $this->template->links = $this->filterLinks($this->linksModel->getLinksTree(), $name);
        
        $this->template->render();
    }
    
    
    
    /**
     * @param array
     * @param string     
     */         
    protected function filterLinks($linksRecursive, $id)
    {
        $linksRecursive = $this->filterByParent($linksRecursive, $id);
        $linksRecursive = $this->filterByConditions($linksRecursive);
    }
    
    
    
    /**
     * @param string
     * @return void     
     */         
    public function setTemplateFile($templateFile)
    {
        $this->templateFile = $templateFile;
    }                

}
