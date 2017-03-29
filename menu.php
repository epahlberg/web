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

$menu->set('name', $item->parse());
$item->set('name', 'esimene');

echo '<pre>';
    print_r($menu);
    print_r($item);
echo '</pre>';


?>