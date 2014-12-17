<?php
require 'vendor/autoload.php';

define('ROOT_DIR', realpath(dirname(__FILE__)));


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use ClearFacts\Efff;


$path = realpath('data');

$objects = new DirectoryIterator($path);
foreach($objects as $name => $object){
    if ($object->isFile())
    {
        echo $object->getPathname() . "\n";        
        $efff = new ClearFacts\Efff($object->getPathname());
        print_r($efff->extractMetadata());
        echo "-----------------\n";
    }
}
exit();







