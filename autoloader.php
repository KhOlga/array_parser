<?php

function myAutoloadControllers($class)
{
    if(file_exists(DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . $class.'.php'))
    {
        require_once DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . $class.'.php';
    }
}

function myAutoloadModels($class)
{
    if(file_exists('/Models' . DIRECTORY_SEPARATOR . $class.'.php')){
        require_once '/Models' . DIRECTORY_SEPARATOR . $class.'.php';
    }
}

spl_autoload_register('myAutoloadControllers');
spl_autoload_register('myAutoloadModels');