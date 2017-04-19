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
define('LANG_DIR', 'lang/'); // lang kataloogi nime konstant
define('DEFAULT_ACT', 'default'); // vaikimisi tegevuse faili nime konstant
define('DEFAULT_LANG', 'et'); // vaikimisi keele määramine
require_once 'db_conf.php';

//Failide kasutusele võtmine

require_once LIB_DIR.'trans.php';
require_once LIB_DIR.'utils.php';
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';

require_once CLASSES_DIR.'mysql.php';

$http = new linkobject();
$db = new mysql(DB_HOST,DB_USER, DB_PASS, DB_NAME);
$siteLangs = array(
    'et' => 'eesti',
    'en' => 'inglise',
    'ru' => 'vene'
);
//kontrollime, milline keel on hetkel aktiivne
$lang_id = $http->get('lang_id');
// kontrollime, kas selline keel keelemassiivis olemas
if(!isset($siteLangs[$lang_id])){
    // kui pole - määrame vaikimisi keel
    $lang_id = DEFAULT_LANG;
    $http->set('lang_id', $lang_id);
}
// määrame mugavuseks aktiivse keele konstandi
define('LANG_ID', $lang_id);
?>