<?php
/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 15.03.2017
 * Time: 15:25
 */
define('LIB_DIR', 'lib/');
define('CLASSES_DIR', 'classes/'); //clasess kataloogi konstant
define('TMPL_DIR', 'tmpl/'); //clasess kataloogi konstant
define('ACTS_DIR', 'acts/');
define('DEFAULT_ACT', 'default');

//Failide kasutusele võtmine
require_once LIB_DIR.'utils.php';
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';



$http = new linkobject();

echo $http->getlink(array('kasutaja'=>'nimi','pass'=>'parool'));

?>