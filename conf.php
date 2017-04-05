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

require_once 'db_conf.php';

//Failide kasutusele võtmine
require_once LIB_DIR.'utils.php';
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';

require_once CLASSES_DIR.'mysql.php';

$http = new linkobject();
$db = new mysql(DB_HOST,DB_USER, DB_PASS, DB_NAME);
echo $http->getlink(array('kasutaja'=>'nimi','pass'=>'parool'));
echo '<pre>';
print_r($db);
echo '<pre>';
?>