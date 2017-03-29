<?php
/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 15.03.2017
 * Time: 15:25
 */

define('CLASSES_DIR', 'classes/'); //clasess kataloogi konstant
define('TMPL_DIR', 'tmpl/'); //clasess kataloogi konstant

//Failide kasutusele võtmine

require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
$http = new linkobject();

echo REMOTE_ADDR;

?>