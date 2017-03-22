<?php
/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 15.03.2017
 * Time: 13:08
 */
// require once võtab vähem ressurssi.
require_once 'conf.php';

echo'<h1>Esileht</h1>';

//valmistame template objekti
$main_tmpl = new template('mydoc');
$main_tmpl->set('user', 'Kasutajanimi');
$main_tmpl->set('title', 'Pealeht');
$main_tmpl->set('lang_bar', 'Keeleriba');
$main_tmpl->set('menu', 'Menüü');
$main_tmpl->set('content', 'Sisu');
//kontrollime objekti sisu

echo '<pre>';
print_r($main_tmpl);
echo '</pre>';



?>