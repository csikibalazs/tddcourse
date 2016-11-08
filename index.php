<?php
/**
 * Created by PhpStorm.
 * User: csikibalazs
 * Date: 2016. 11. 07.
 * Time: 19:46
 */
require_once "patternreplacer.php";
$file = 'slack.log';
$contents = file_get_contents($file);

$replacer = new PatternReplacer();
$replaced_pattern = $replacer->replace($contents);