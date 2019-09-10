<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$string = "Bananas, Apples, Coconuts";

var_dump( xtrim(",", $string) );