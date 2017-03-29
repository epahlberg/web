<?php
/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 15.03.2017
 * Time: 15:25
 */

define('CLASSES_DIR', 'classes/'); //clasess kataloogi konstant
define('TMPL_DIR', 'tmpl/'); //clasess kataloogi konstant
define('LIB_DIR', 'lib/');

//Failide kasutusele võtmine

require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
require_once LIB_DIR.'utils.php';


$http = new linkobject();
echo $http->baseurl;
echo '<br>';
echo $link = $http->getlink(array('kasutaja'=>'nimi','pass'=>'parool'));

?>