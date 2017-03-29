<?php

/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 29.03.2017
 * Time: 13:45
 */
class http
{

    var $vars = array(); // päringute andmed
    var $server = array(); //serveri andmed
    //algandmed:
    function init(){
        $this->vars = array_merge($_GET, $_POST, $_FILES);
        $this->server = $_SERVER;
    }







}

?>