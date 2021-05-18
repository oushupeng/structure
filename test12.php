<?php
$bcodes = '1,2,,3,4,,5';
$bcodes = explode(',', $bcodes);
var_dump($bcodes);
$bcodes = array_values(array_filter($bcodes));
var_dump($bcodes);
var_dump('一二三');
