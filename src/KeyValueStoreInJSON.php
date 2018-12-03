<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 02.12.18
 * Time: 17:50
 */

require_once __DIR__.'/KeyValueStoreInterface.php';
require_once __DIR__.'/Storages.php';


class KeyValueStoreInJSON extends Storages
{
    public const  FILE_NAME = __DIR__.'/data.json';

    public $storageName = 'json';

    public $data;

    public function get($key, $default = null)
    {
        // TODO: Implement get() method.

        $this->data=json_decode(file_get_contents(self::FILE_NAME),TRUE);

        foreach ( $this->data  as $k => $value){
            if ($key === $k) {
               return $value;
            }
        }
    }

    public function set($key, $value)
    {
        // TODO: Implement set() method.


        $this->data=json_decode(file_get_contents(self::FILE_NAME),TRUE);

        unset($file);

        $this->data[$key] = $value;

        file_put_contents(self::FILE_NAME,json_encode($this->data));

    }

    public function clear()
    {
        // TODO: Implement clear() method.
        $this->data=json_decode(file_get_contents(self::FILE_NAME),TRUE);

        $this->data = null;

        file_put_contents(self::FILE_NAME,json_encode($this->data));

    }

    public function remove($key)
    {
        // TODO: Implement remove() method.
        $this->data=json_decode(file_get_contents(self::FILE_NAME),TRUE);

        unset($this->data[$key]);

        file_put_contents(self::FILE_NAME,json_encode($this->data));

    }
}