#!/usr/bin/env php
<?php


require_once __DIR__ . '/../src/KeyValueStoreInArray.php';
require_once __DIR__ . '/../src/KeyValueStoreInJSON.php';
require_once __DIR__ . '/../src/KeyValueStoreInYAML.php';
require_once __DIR__ . '/../src/KeyValueStoreInterface.php';
require_once __DIR__ . '/../src/KeyValueStore.php';



$store  = new KeyValueStore();
$store->addStorage(new KeyValueStoreInArray());
$store->addStorage(new KeyValueStoreInJSON());
$store->addStorage(new KeyValueStoreInYAML());
//print_r($store->storages);
$store->storingData(1, 'orange');
$store->storingData(2, 'bananas');
$store->storingData(3, 'coffe');
$store->storingData(4, 'vodka');

var_dump($store->hasStorageData('yaml', 3));
var_dump($store->getStorageData('yaml', 3));
$store->removeStorageData('yaml', 3);
var_dump($store->hasStorageData('yaml', 3));
//$store->clearStorageData('yaml');




        
