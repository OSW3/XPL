<?php

define('XPL_LIBRARY', __DIR__.'/lib/');

$library = scandir(XPL_LIBRARY);

foreach ($library as $feature) 
{
    if (preg_match("/\.php$/", $feature)) 
    {
        require_once XPL_LIBRARY.$feature."/".$feature.".php";
    }
}