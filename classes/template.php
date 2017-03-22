<?php

/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 22.03.2017
 * Time: 12:11
 */
class template
{

    var $file = ''; // html faili malli nimi
    var $content = false; //html malli faili sisu
    var $vars = array(); //html malli vaade sisu

    function load_file(){
        $f = $this->file;
        if (!is_dir(TMPL_DIR)){
            echo 'Kataloogi '.TMPL_DIR.' ei leitud.<br>';
            exit;

        }
        if(file_exists($f) and is_file($f) and is_readable($f)) {
            $this->read_file($f);
        }
        if ($this->content===false) {
            echo 'Ei saanud sisu lugeda<br>';
        }

    }

    function read_file($f){
        $this->content = file_get_contents($f);


    }

}

?>