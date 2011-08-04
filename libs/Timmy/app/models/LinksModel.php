<?php

namespace Timmy;

use \DibiConnection;

/**
 * Links model.
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
    
    /** @var array */
    protected $allLinksTree;
    
    
    public function __construct(DibiConnection $dibi)
    {
        $this->dibi = $dibi;
    }
    
    
    
    /**
     * @return array
     */         
    public function getLinksTree()
    {
        $this->allLinks = $this->dibi->fetchAll("SELECT * FROM `::links` ORDER BY `order` ASC");
        
        $this->allLinksTree = $this->createTree($this->allLinks);
        
        return $this->allLinksTree;
    }
    
    
    
    /**
     * @param array
     * @param int
     * @return array          
     */         
    protected function createTree($links, $parent_id = 0)
    {
        $linksTree = array();
        foreach($this->allLinks as $link){
            if ($link->parent_id == $parent_id) {
                $link->childs = $this->createTree($links, $link->id);
                $linksTree[] = $link;
            }
        }
        
        return $linksTree;
    }

}
