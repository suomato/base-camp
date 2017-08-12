<?php

use Symfony\Component\Finder\Finder;

/*
| The purpose of this file is to require every PHP-file in config folder.
*/

$finder = new Finder();

$finder->files()
       ->in(__DIR__)
       ->name('*.php')
       ->notName(basename(__FILE__))
       ->notName('_custom-post-type-template.php');

foreach ($finder as $file) {
    require_once $file->getRealPath();
}
