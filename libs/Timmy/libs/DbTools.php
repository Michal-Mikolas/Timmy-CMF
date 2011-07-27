<?php

namespace \Timmy;

use \DibiConnection;

/**
 * DbTools
 * Třída s metodami pro práci s databází
 *
 * @author Michal Mikoláš <nanuqcz@gmail.com>
 * @package Timmy 
 */
class DbTools extends Object
{
    /** @var DibiConnection */
    protected $dibi;
    
    /** @var int $time  time pro aktualizaci DFS stromu */
    protected $time;
    
    
    
    /**
     * @param \DibiConnection
     */         
    public function __construct(DibiConnection $dibi)
    {
        $this->dibi = $dibi;
    }
    
    
    
    /**
     * Kontroluje strukturu databáze na existenci tabulek a jejich sloupečků
     * @param array $tables
     * @return bool
     */
    public function checkTables($tables)
    {
        foreach($db_structure as $table=>$columns){
                $columns2 = $this->dibi->query("SHOW COLUMNS FROM `$table`")->fetchAll();
                /** @todo tohle pořešit nějak líp
                foreach($columns2 as $key=>$column){           //převod DibiRow na pole
                    $columns2[$key] = $column[key($column)];   
                }*/
                
                // Tabulka neexistuje
                if (!$columns2) {
                    return FALSE;
                }
                
                // Chybějící sloupečky
                $diff = array_diff($columns, $columns2);
                if (count($diff)) {
                    return FALSE
                }
                
                // Přebývající sloupečky
                $diff = array_diff($columns2, $columns);
                if (count($diff)) {
                    return FALSE;
                }                        
        } 
        
        return TRUE;              
    }
    
    
    
    /**
     * Provede zadané SQL příkazy (obdoba Dibi::loadFile())
     * @param string $sql_queries
     * @return int 
     */
    final static function runSql($sql_queries)
    {
        $sql_lines = explode("\n", $sql_queries);
        
        $count = 0;
        $sql = '';
        $s = array_shift($sql_lines);
        while($s){
            $sql .= $s;
            if (substr(rtrim($s), -1) === ';') {
        				$this->dibi->query($sql);
        				$sql = '';
        				$count++;
      			}
  
            $s = array_shift($sql_lines);
        }
    
    		return $count;  
    }

    
    
    /**
     * Aktualizuje `left` a `right` záznamy v DFS stromu v určené tabulce
     * @param string $table
     * @param string $level_row
     * @return void
     */
    public function updateDfs($table, $level_row = 'level', $parent_id = 0)
    { 
        if($parent_id==0) $this->time=0;

        $lines = $this->dibi->fetchAll("SELECT `id` FROM `::labels` WHERE parent_id=%i", $parent_id);
        foreach($lines as $line){
            $this->time++;
            $this->dibi->query("UPDATE `::labels` SET `left`=%i", $this->time, "WHERE `id`=%i", $line->id);
            $this->updateDfs($table, $level_row, $line->id);
            $this->time++;
            $this->dibi->query("UPDATE `::labels` SET `right`=%i", $this->time, "WHERE `id`=%i", $line->id);
        }              
    }
    
}
