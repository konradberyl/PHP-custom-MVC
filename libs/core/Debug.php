<?php

class Debug
{
    CONST DEBUG = false;

    public function showDebugErros()
    {
        if (self::DEBUG) {

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }
}
$debug = new Debug();
$debug->showDebugErros();
