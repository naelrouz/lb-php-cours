<?php
/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 24/05/2016
 * Time: 09:26
 */
spl_autoload_register(function($class_name){
    require_once 'classes/'.$class_name.'.php';
});