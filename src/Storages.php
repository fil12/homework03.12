<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 03.12.18
 * Time: 0:29
 */

abstract class Storages implements KeyValueStoreInterface
{
    public $data = [];

    public function set($key, $value)
    {
        // TODO: Implement set() method.
    }

    public function get($key, $default = null)
    {
        // TODO: Implement get() method.
    }

    public function has($key): bool
    {
        // TODO: Implement has() method.
        return array_key_exists($key, $this->data);
    }

    public function remove($key)
    {
        // TODO: Implement remove() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }


}