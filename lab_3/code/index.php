<?php
// task 1a
$regexp = '/a..b/';
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
echo "String found: {$count}\n";