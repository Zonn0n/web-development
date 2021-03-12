<?php

header("Content-Type:‌ ‌text/plain");‌‌

$string = isset($_GET['text']) ? (string)$_GET['text']:null;
$string = trim($string);
echo $string;