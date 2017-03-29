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
$link = $http->getlink(array('act'=>'first'));
$item->set('link', $link);
$menu->set('items',  $item->parse());

$item->set('name', 'teine');
$link = $http->getlink(array('act'=>'teine'));
$item->set('link', $link);
$menu->add('items',  $item->parse());



$main_tmpl->add('menu', $menu->parse());


?>