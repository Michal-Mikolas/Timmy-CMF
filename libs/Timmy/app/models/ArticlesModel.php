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
    
    

    public function getAll($tag = NULL)
    {
        return $this->dibi->fetchAll("
            SELECT * FROM `::articles` 
            %if", $tag, "   #only articles with selected tag 
              WHERE `id` IN (
                SELECT a2t.`article_id` 
                FROM `::tags` t JOIN `::articles_2_tags` a2t
                  ON (t.`id`=a2t.`tag_id`)
                WHERE `name_slug`=%s", $tag, "
              )
            %end
            ORDER BY `order` ASC
        ");
    }

    
    
    public function getArticle($name_slug)
    {
        return $this->dibi->fetch("SELECT * FROM `::articles` WHERE `name_slug`=%s", $name_slug);
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
        return $this->dibi->query("UPDATE `::articles` SET ", $values, "WHERE `name_slug`=%s", $url_name);
    }

    
    
    public function delete($url_name)
    {
        $this->dibi->query("DELETE FROM `::articles` WHERE `name_slug`=%s", $url_name);
        return $this->dibi->affectedRows();
    }
    
}
