<?php

class Loader
{

    /**
     * include  application neccessary files
     * @param type $class
     * @return type
     */
    protected function custom_load($class)
    {

        $path = array(
            'libs/core/',
            'libs/exceptions/');

        foreach ($path as $singlePath) {

            $file = $singlePath.$class.".php";

            if (is_file($file)) {

                include_once $file;
            }
        }
    }

    /**
     * Register spl autoload
     */
    public function register()
    {
        spl_autoload_register(array($this, 'custom_load'));
    }

    /**
     * Use specific file based on context
     * @param type $path
     */
    public static function useFile($path)
    {
        include $path;
    }
}
$loader = new Loader();
$loader->register();
