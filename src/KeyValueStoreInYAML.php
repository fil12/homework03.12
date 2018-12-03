<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 02.12.18
 * Time: 17:49
 */
require_once __DIR__.'/KeyValueStoreInterface.php';
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/Storages.php';


use Symfony\Component\Yaml\Yaml;


class KeyValueStoreInYAML extends Storages
{
    const  FILE_NAME = __DIR__.'/data.yml';

    public $storageName = 'yaml';

    public $data;

    public function get($key, $default = null)
    {
        // TODO: Implement get() method.

        $this->data = Yaml::parse(self::FILE_NAME);

        foreach ($this->data as $k => $value){

            if ($key === $k){

                return $value;

            }
        }
    }

    public function set($key, $value)
    {
        // TODO: Implement set() method.

        $this->data [$key] = $value;

        $yaml = Yaml::dump($this->data);

        file_put_contents(self::FILE_NAME, $yaml);

    }

    public function clear()
    {
        // TODO: Implement clear() method.

        $this->data = null;

        file_put_contents(self::FILE_NAME, $this->data );
    }

    public function remove($key)
    {
        // TODO: Implement remove() method.

        unset($this->data[$key]);

        $yaml = Yaml::dump($this->data);

        file_put_contents(self::FILE_NAME, $yaml);

    }
}