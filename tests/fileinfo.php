<?php

require_once __DIR__ . '/../vendor/autoload.php';

use OSW3\Fileinfo;
?>

<pre><?php print_r( fileinfo("./resources/unicorn.jpg", Fileinfo::INFO_MIMETYPE) ) ?></pre>
<pre><?php print_r( fileinfo("./resources/unicorn.jpg", [Fileinfo::INFO_MIMETYPE, Fileinfo::CONTENT_BASE64]) ) ?></pre>
<pre><?php print_r( fileinfo("./resources/unicorn.jpg") ) ?></pre>