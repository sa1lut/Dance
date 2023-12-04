<?php
require_once('init.php');
require_once('helpers.php');

$header = include_template('header.php');
$footer = include_template('footer.php');

$layout_content = include_template('main.php', [
    'header' => $header,
    'footer' => $footer,

]);

print($layout_content);