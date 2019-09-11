<?php

require_once __DIR__ . '/../vendor/autoload.php';

$string = "Bananas,    Apples     ,    Coconuts";

?>

<pre><?php print_r( xtrim(",", $string) ) ?></pre>
