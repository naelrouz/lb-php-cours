<?php
/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 17.05.2016
 * Time: 15:21
 */

$string = 'abccbar';
var_dump($string);
echo isPalindrom($string);
function isPalindrom($string)
{
    $strrev = '';
    $size = strlen($string)-1;
    for ($i=0; $i <= $size; $i++) {
        $strrev[$i] = $string[$size-$i];
    }
    var_dump($strrev);
    $strrevTmp = implode($strrev);
    echo '<br>'.$string.' ';

    if ($string == $strrevTmp) {
        echo 'это палиндром!!!!';
        //return true;

    } else {
        echo 'это <b>нифига</b> не палиндром!!!';
        //return false;
    }
}

echo '<hr>';

$string = 'abccba';

//var_dump($string);
//isPali($string);

function isPali($string)
{
    $strrev = strrev($string);
    if ($string == $strrev) {
        echo 'это палиндром!!!!';
    } else {
        echo 'это <b>нифига</b> не палиндром!!!';
    }
}