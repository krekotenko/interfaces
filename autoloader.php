<?php
define('ROOT_URI', dirname( __FILE__ , 1));
spl_autoload_register(function ($class) {
    require  ROOT_URI.  '/' . str_replace('\\', '/', $class) . '.php';
});