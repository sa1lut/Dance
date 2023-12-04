<?php
require_once('init.php');
require_once('helpers.php');
require_once('functions.php');

$header = include_template('header.php');
$footer = include_template('footer.php');
$classes = getClassesList($con);

$classes_content = include_template('classes.php', [
    'header' => $header,
    'footer' => $footer,
    'classes' => $classes,

]);

print($classes_content);