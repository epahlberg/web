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

$main_tmpl = new template(TMPL_DIR.'mydoc.html');

//kontrollime objekti sisu

echo '<pre>';
print_r($main_tmpl);
echo '</pre>';

?>