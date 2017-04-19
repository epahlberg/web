<?php

/**
 * Created by PhpStorm.
 * User: erik
 * Date: 4/19/17
 * Time: 8:53 AM
 */
class session
{
    var $sid=false;
    var $vars =array();
    var $http = false;
    var $db = false;
    var $anonymus = true;

    function __construct(&$http)
    {
        $this->http = &$http;
        $this->db=&$db;

    }

    function createSession($user = false){


    }

}