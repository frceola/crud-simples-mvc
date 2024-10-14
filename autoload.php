<?php

    spl_autoload_register(function($class){

        $basedir = __DIR__.'/';

        $file = $basedir. str_replace('\\', '/', $class).'.php';

        if(file_exists($file)) include_once $file;
    });