<?php

/** @var ClassLoader $loader */
use Composer\Autoload\ClassLoader;

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->add(null, __DIR__);
