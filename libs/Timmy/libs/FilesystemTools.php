<?php

namespace Timmy;

use \Nette\Utils\Strings, 
    \Nette\Object;

/**
 * Třída s metodami pro práci se soubory a složkami
 *
 * @author Michal Mikoláš <nanuqcz@gmail.com>
 * @package Timmy 
 */
class FilesystemTools extends Object 
{
    
    /**
     * Vrací upravený název souboru tak, aby v případě zkopírování nepřepsal jiný soubor
     * @param string $dir
     * @param string $name
     * @return string          
     */
    public static function getSafeFilename($path, $name)
    {
        $name = Strings::webalize($name, '.');
        $path = rtrim($path, '/\\');
        if (!is_dir($path)) {
            throw new Exception("Directory `$path` does not exists.");
        }
        
        $i = 1;
        $file_name = $name;
        while(file_exists("$path/$file_name")){
            $i++;
            $file_name = preg_replace("#(\\.[a-zA-Z0-9]+)$#i", "-$i\\1", $name);
        }
        
        return $file_name;
    }  
    
}