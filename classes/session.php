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
        $this->sid = $http->get('sid');
    }

    function createSession($user = false){
        if ($user == false){
            $user = array(
                'user_id'=>0,
                'role_id'=>0,
                'username'=>'Anonymous'
            );
        }

        $sid = md5(uniqid(time() .mt_rand(1, 1000), true));
        $sql = 'INSERT INTO session SET '.
            'sid='.fixDb($sid).', '.
            'user_id='.fixDb($user['user_id']).', '.
            'user_data='.fixDb(serialize($user)).', '.
            'login_ip='.fixDb(REMOTE_ADDR).', '.
            'created=NOW()';

        $this->db->query($sql);
        $this->sid=$sid;
        $this->http->set('sid', $sid);


    }

}