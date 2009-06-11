<?php
require_once('ClassParser.php');

$cp = new ClassParser();
$cp->parse('sample.classes.php');
var_dump($cp->getClasses());
//var_dump($cp->getClassesImplementing('iSome'));
//var_dump($cp->getClassesExtending('Our'));