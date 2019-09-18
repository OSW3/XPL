<?php
/**
 * str_uppercase
 * --
 * return the string in upper case according to the specification
 * 
 * str_uppercase(string $string [, string $specification='UPPERCASE' [, string $delimiter=' ']]): string
 * 
 * @version 1.0.0
 * @since 1.2.0
 * 
 * @param string $string input string
 * @param string $specification of the method
 * @param string $delimiter delimiter symbol for UCWORD specification
 * @return string
 */

if (!function_exists('str_uppercase'))
{
    function str_uppercase(string $string, string $specification='UPPERCASE', string $delimiter=' ')
    {
        switch ($specification)
        {
            case 'UCWORD':
                return implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));

            case 'UCFIRST':
                return ucfirst(strtolower($string));

            case 'UPPERCASE':
            default:
                return strtoupper($string);
        }
    }
}