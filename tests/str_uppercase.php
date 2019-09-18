<?php

require_once __DIR__ . '/../vendor/autoload.php';

$str_test_1 = "Apple";
$str_test_2 = "Lorem Ipsum Dolor Sit Amet...";
$str_test_3 = "bonjour monsieur jean-pierre";
?>

<pre> Input : <?= $str_test_1 ?><br>Output : <?= str_uppercase($str_test_1) ?></pre>
<pre> Input : <?= $str_test_2 ?><br>Output : <?= str_uppercase($str_test_2, "UCFIRST") ?></pre>
<pre> Input : <?= $str_test_3 ?><br>Output : <?= str_uppercase($str_test_3, "UCWORDS", "-") ?></pre>
