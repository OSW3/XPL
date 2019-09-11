<?php

define('XPL_LIBRARY', __DIR__.'/functions/');

foreach (scandir(XPL_LIBRARY) as $feature) 
{
    $file = XPL_LIBRARY.$feature;

    if (preg_match("/\.php/", $file) && file_exists($file))
    {
        require_once $file;
    }
}