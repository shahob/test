<?php
function loader($class)
{
    $file = '../src/'.$class . '.php';
    if (file_exists($file)) {
    	var_dump($file);
        require $file;
    }
}
spl_autoload_register('loader');