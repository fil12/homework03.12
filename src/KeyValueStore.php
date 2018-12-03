<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 02.12.18
 * Time: 23:47
 */
require_once __DIR__.'/KeyValueStoreInterface.php';

final class KeyValueStore
{
    public  $storages = [];

    public function addStorage(KeyValueStoreInterface $storage)
    {
        $this->storages []= $storage;
    }

    public function storingData($key, $value){
        foreach ($this->storages as $k=>$storage) {
            $storage->set($key, $value);
        }
    }

    public function getStorage($storageName)
    {

    }

    public function getStorageData($storageName, $key)
    {
        foreach ($this->storages as $storage){
            if ($storageName === $storage->storageName){
                return $storage->get($key);
            }
        }
    }

    public function  hasStorageData($storageName, $key)
    {
        foreach ($this->storages as $storage){
            if ($storageName === $storage->storageName){
                return $storage->has($key);
            }
        }
    }

    public function  removeStorageData($storageName, $key)
    {
        foreach ($this->storages as $storage){
            if ($storageName === $storage->storageName){
                return $storage->remove($key);
            }
        }
    }

    public function  clearStorageData($storageName)
    {
        foreach ($this->storages as $storage){
            if ($storageName === $storage->storageName){
                return $storage->clear();
            }
        }
    }

}
