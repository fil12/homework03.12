<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 02.12.18
 * Time: 17:48
 */
require_once __DIR__.'/KeyValueStoreInterface.php';
require_once __DIR__.'/Storages.php';

class KeyValueStoreInArray extends Storages
{
    public $storageName = 'array';

    public $data;

    public function get($key, $default = null)
    {
        // TODO: Implement get() method.

        if (array_key_exists($key, $this->data)){

                    return $this->data[$key].\PHP_EOL;

        }
    }

    public function set($key, $value)
    {
        // TODO: Implement set() method.

        $this->data [$key] = $value;

    }

    public function clear()
    {
        // TODO: Implement clear() method.

        unset($this->data);
    }

    public function remove($key)
    {
        // TODO: Implement remove() method.

        unset($this->data[$key]);
    }

}