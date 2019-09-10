<?php

define('XPL_LIBRARY', __DIR__.'/lib/');

$library = scandir(XPL_LIBRARY);

foreach ($library as $file) 
{
    if (preg_match("/\.php$/", $file)) 
    {
        require_once XPL_LIBRARY.$file;
    }
}