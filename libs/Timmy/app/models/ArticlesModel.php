<?php

namespace Timmy;

use \DibiConnection;

/**
 * Articles model.
 *
 * @author     Michal Mikoláš <nanuqcz@gmail.com>             
 * @package    Timmy
 */
class ArticlesModel
{
    /** @var DibiConnection */
    protected $dibi;
    
    
    
    public function __construct(DibiConnection $dibi) {
        $this->dibi = $dibi;
    }
    
    

    public function getAll()
    {
        return $this->dibi->fetchAll("SELECT * FROM `::articles` ORDER BY `created` DESC");
    }

    
    
    public function getArticle($url_name)
    {
        return $this->dibi->fetch("SELECT * FROM `::articles` WHERE `url_name`=%s", $url_name);
    }

    
    
    public function createArticle($values)
    {
        $values['created%sql'] = "NOW()";
        $this->dibi->query("INSERT INTO `::articles` ", $values);

        return $this->dibi->insertId();
    }

    
    
    public function updateArticle($url_name, $values)
    {
        $values['edited'] = date("Y-n-j G:i:s");
        return $this->dibi->query("UPDATE `::articles` SET ", $values, "WHERE `url_name`=%s", $url_name);
    }

    
    
    public function delete($url_name)
    {
        $this->dibi->query("DELETE FROM `::articles` WHERE `url_name`=%s", $url_name);
        return $this->dibi->affectedRows();
    }
    
}
