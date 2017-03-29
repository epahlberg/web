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

$item->set('name', 'esimene');
$menu->set('items',  $item->parse());
$item->set('name', 'teine');
$menu->add('items', $item->parse());

$main_tmpl->add('menu', $menu->parse());


?>