<?php
/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 22.03.2017
 * Time: 15:26
 */
// loome menüü objektid

$menu = new template('menu.menu');
$item = new template('menu.item');
// lisame sisu
// menüü sql lause
$sql = 'SELECT content_id, title FROM content WHERE '.
    'parent_id='.fixDb(0).' AND show_in_menu='.fixDb(1);
// saame päringu tulemus
$res = $db->getArray($sql);
// kontrollime tulemuse sisu
if($res != false){
    foreach ($res as $page){
        // nimetame menüüs väljastav element
        $item->set('name', tr($page['title']));
        // loome antud menüü elemendile lingi
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        // lisame antud link menüüsse
        $item->set('link', $link);
        // lisame valmis link menüü objekti sisse
        $menu->add('items', $item->parse());
    }
}
// kontrollime objekti olemasolu ja sisu
// kui soovime pidevat asendamist, siis set funktsioon add asemel
$main_tmpl->add('menu', $menu->parse());


?>