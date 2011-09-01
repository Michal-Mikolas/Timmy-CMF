<?php

namespace Timmy;

use \Nette\ArrayHash;
use \DibiConnection;

/**
 * Links model
 *
 * @author     Michal Mikoláš <nanuqcz@gmail.com>             
 * @package    Timmy
 */
class LinksModel
{
    /** @var DibiConnection */
    protected $dibi;
    
    /** @var array */
    protected $allLinks;
    
    
    public function __construct(DibiConnection $dibi)
    {
        $this->dibi = $dibi;
        $this->allLinks = NULL;
    }
    
    
    
    /**
     * @return array
     */
    public function getLinks()
    {
        if (is_null($this->allLinks)) {
            $this->allLinks = $this->prepareLinks( $this->dibi->query("SELECT * FROM `::links` ORDER BY `order` ASC")->fetchAssoc('id') );
        }
        
        return $this->allLinks;
    }         
    
    
    
    /**
     * @param int
     * @return \DibiRow     
     */
    public function getLink($id)
    {
        $allLinks = $this->getLinks();
        return $allLinks[$id];
    }         
    
    
    
    /**
     * @param int    
     * @return array
     */         
    public function getLinksTree($rootId = 0)
    {
        $allLinks = $this->getLinks();
        
        if ($rootId) {
            $allLinksTree = $this->getLink($rootId);
        } else {
            $allLinksTree = $this->getEmptyLink();   //assign all links under one main link
        }
        $allLinksTree->childs = $this->createTree($allLinks, $rootId);
        
        return $allLinksTree;
    }
    
    
    
    /**
     * @return ArrayHash
     */
    public function getEmptyLink()
    {
        $link = new ArrayHash();
        $link->id = 0;
        $link->name = NULL;
        $link->childs = array();
        
        return $link;
    }
    
    
    
    /**
     * @param array
     * @param int
     * @return array          
     */         
    protected function createTree($links, $parent_id = 0)
    {
        $linksTree = array();
        foreach($links as $link){
            if ($link->parent_id == $parent_id) {
                $link->childs = $this->createTree($links, $link->id);
                $linksTree[] = clone $link;   //clone - fix bug with rewriting filtered links
            }
        }
        
        return $linksTree;
    }
    
    
    
    /**
     * @param array
     * @return array     
     */
    protected function prepareLinks($links)
    {
        foreach($links as $key => $link){
            $links[$key]->active = FALSE;
            $links[$key]->href = '';
        }
        
        return $links;
    }             

}
