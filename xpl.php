<?php

define('XPL_LIBRARY', __DIR__.'/lib/');

$library = scandir(XPL_LIBRARY);

foreach ($library as $feature) 
{
    $file = XPL_LIBRARY.$feature."/".$feature.".php";

    if (file_exists($file))
    {
        require_once XPL_LIBRARY.$feature."/".$feature.".php";
    }
}