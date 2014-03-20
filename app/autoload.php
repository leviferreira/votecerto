<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

//use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver as MongoAnnotationDriver;
//MongoAnnotationDriver::registerAnnotationClasses();

return $loader;
