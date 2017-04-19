<?php

/**
 * Created by PhpStorm.
 * User: erikp
 * Date: 29.03.2017
 * Time: 14:22
 */
class linkobject extends http
{
    var $baseurl = false;
    var $delimiter = '&amp;';
    var $eq = '=';
    var $protocol = 'http://';
    var $aie = array('lang_id'); // lisame keele näitamist veebis

    function __construct()
    {
        parent::__construct(); //http konstruktor tuleb tööle
        $this->baseurl = $this->protocol . HTTP_HOST . SCRIPT_NAME;
    }

    //andmete paari lisamine kujul: asi=väärtus&asi=väärtus
    function addtolink(&$link, $nimi, $val)
    {
        if ($link != '') {
            $link = $link . $this->delimiter;
        }
        $link = $link . fixurl($nimi) . $this->eq . fixurl($val);
    }

    function getLink($add = array(), $aie = array(), $not = array())
    {
        $link = '';
        foreach ($add as $nimi => $val) {
            $this->addToLink($link, $nimi, $val);
        }
        // juhul, kui antud element juba meie lehel ette defineeritud
        foreach ($aie as $nimi) {
            $val = $this->get($nimi);
            if ($val != false) {
                $this->addToLink($link, $nimi, $val);
            }
        }
        // juhul, kui antud objektis see väärtus juba määratud - näiteks keele id
        foreach ($this->aie as $nimi) {
            $val = $this->get($nimi);
            // nüüd tuleb kontrollida, kas olemasolev asi juba lingis lisatud või mitte
            if ($val != false and !in_array($nimi, $not)) {
                $this->addToLink($link, $nimi, $val);
            }
        }
        if ($link != '') {
            $link = $this->baseurl . '?' . $link;
        } else {
            $link = $this->baseurl;
        }
        return $link;

    }
}