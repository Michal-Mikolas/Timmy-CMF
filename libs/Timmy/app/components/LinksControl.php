<?php

namespace Timmy;

use \Nette\Application\UI\Control, 
    \Nette\Templating\FileTemplate,
    \Nette\ArrayHash;
use \Timmy\LinksModel;

/**
 * LinksControl
 * control to render links tree, filtered with various conditions
 * 
 * @author     Michal Mikoláš <nanuqcz@gmail.com>             
 * @package    Timmy
 */ 
class LinksControl extends Control 
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
     * @param string $requestId  id of link, whose childs have to be rendered
     * @return void     
     */         
    public function render($requestId)
    {
        $this->template = $this->getTemplate();
        $this->template->setFile($this->templateFile);
        
        $this->template->link = $this->filterLinks($this->linksModel->getLinksTree(), $requestId);
        
        $this->template->render();
    }
    
    
    
    /**
     * @param string
     * @return void     
     */         
    public function setTemplateFile($templateFile)
    {
        $this->templateFile = $templateFile;
    } 
    
    
    
    /**
     * @param array
     * @param string
     * @return array          
     */         
    protected function filterLinks($linksTree, $requestId)
    {
        // Filters
        $linksTree = $this->filterByParent($linksTree, $requestId, $this->linksModel);
        $linksTree = $this->filterByConditions($linksTree, $requestId, $this->linksModel);
        $linksTree = $this->markActive($linksTree, $requestId, $this->linksModel);
        $linksTree = $this->constructUrls($linksTree, $requestId, $this->linksModel);
        
        return $linksTree;
    }
    
    
    
    /**
     * @param array
     * @param int 
     * @param LinksModel     
     * @return array         
     */
    protected function filterByParent($linksTree, $requestId, $linksModel)
    {
        $filteredTree = $linksModel->getEmptyLink();

        foreach($linksTree->childs as $link){
        
            if ($link->id == $requestId) {
                $filteredTree = $link;
                break;
            } elseif($requestId == 0) {
                $filteredTree->childs[] = $link;
            } else {
                $pom = $this->filterByParent($link, $requestId, $linksModel);
                if (count($pom->childs)) {
                    $filteredTree = $pom;
                    break;
                }
            }
            
        }
        
        return $filteredTree;
    } 
    
    
    
    /**
     * @param array
     * @param int
     * @param LinksModel          
     */
    protected function filterByConditions($linksTree, $requestId, $linksModel)
    {
        $blacklist = array();
        foreach($linksTree->childs as $key => $link){
            if ($link->cond_id && !$this->isActive($link->cond_id)) {
                $blacklist[] = $key;   //unset($linksTree->childs[$key]) doesn`t work there :-(
            } elseif($link->childs) {
                $linksTree->childs[$key] = $this->filterByConditions($link, $requestId, $linksModel);
            }
        }
        
        foreach(array_reverse($blacklist) as $key) {
            unset($linksTree->childs[$key]);
        }
        
        return $linksTree;
    }
    
    
    
    /**
     * @param array
     * @param int
     * @param LinksModel          
     */
    protected function markActive($linksTree, $requestId, $linksModel)
    {
        foreach($linksTree->childs as $key => $link){
            if ($this->presenter->isCurrent($link->destination, $link->args)) {
                $linksTree->childs[$key]->active = TRUE;
            }
            $linksTree->childs[$key] = $this->markActive($link, $requestId, $linksModel);
        }
        
        return $linksTree;
    }
    
    
    
    /**
     * @param array
     * @param int
     * @param LinksModel          
     */
    protected function constructUrls($linksTree, $requestId, $linksModel)
    {
        foreach($linksTree->childs as $key => $link){
        }
        
        return $linksTree;
    }
    
    
    
    /**
     * @param int
     * @return bool     
     */
    protected function isActive($linkId)
    {
        $conditionLink = $this->linksModel->getLinksTree($linkId);
        
        // link active?
        if ($this->presenter->isCurrent($conditionLink->destination, $conditionLink->args)) {
            return TRUE;
        }
        
        // or any child active?
        foreach($conditionLink->childs as $link){
            if ($this->isActive($link->id)) {
                return TRUE;
            }
        }
        
        return FALSE;
    }                  
               

}
