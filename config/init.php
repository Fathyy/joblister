<?php
//config file that holds DB information
require_once 'config.php';
spl_autoload_register(function($class_name)
{
    require 'lib/' .$class_name. '.php';
});
