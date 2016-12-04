<?php
// config/config.php

$dir = __DIR__ . '/../../todosBackend';

$iterator = Symfony\Component\Finder\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('build')
    ->exclude('tests')
    ->in($dir);

$options = [
    'theme'                => 'default',
    'title'                => 'Laravel API Documentation',
    'build_dir'            => __DIR__ . '/../build/todosBackend',
    'cache_dir'            => __DIR__ . '/../cache/todosBackend',
];

$sami = new Sami\Sami($iterator, $options);

return $sami;
