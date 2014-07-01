<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($classname) {
    if (file_exists(__DIR__ . '\\' .$classname . '.php')) {
        include_once __DIR__ . '\\' . $classname . '.php';
    }
}

$config=[];
require 'framework\config\database.php';
require 'framework\config\common.php';

$app = new \framework\base\Hardcore($config);
echo $app->getApplicationTitle();
echo $app->getApplicationVersion();