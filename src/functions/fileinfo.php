<?php

/**
 * fileinfo
 * --
 * Retrieve some info about a file
 * 
 * fileinfo(string $file [, string|array $options = []])
 * 
 * @version 1.0.0
 * @since 1.1.0
 * 
 * @param string $file Adresse of fila you want to parse
 * @param string $options Options you want to retrive
 * 
 * @return mixed
 */

use OSW3\Fileinfo;

if (!function_exists('fileinfo'))
{
    function fileinfo(string $file, $options = [])
    {
        $fileinfo = new Fileinfo($file);

        if (!is_array($options))
        {
            $options = [$options];
        }

        // If no options specified
        if (empty($options))
        {
            return array_merge(
                $fileinfo->info(), 
                $fileinfo->content()
            );
        }

        else 
        {
            // If only one option is specified
            if (count($options) == 1)
            {
                $info = $fileinfo->get($options[0]);
            }
            
            // If more the one option are speciefied
            else
            {
                $info = [];
    
                foreach ($options as $option) 
                {
                    $info[$option] = $fileinfo->get($option);
                }
            }

            return $info;
        }
    }
}