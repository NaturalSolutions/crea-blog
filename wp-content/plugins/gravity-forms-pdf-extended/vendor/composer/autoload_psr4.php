<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Masterminds\\' => array($vendorDir . '/masterminds/html5/src'),
    'GFPDF\\View\\' => array($baseDir . '/src/view'),
    'GFPDF\\Test\\' => array($baseDir . '/tests/unit-tests'),
    'GFPDF\\Model\\' => array($baseDir . '/src/model'),
    'GFPDF\\Helper\\Licensing\\' => array($baseDir . '/src/helper/licensing'),
    'GFPDF\\Helper\\Fields\\' => array($baseDir . '/src/helper/fields'),
    'GFPDF\\Helper\\' => array($baseDir . '/src/helper', $baseDir . '/src/helper/abstract', $baseDir . '/src/helper/interface'),
    'GFPDF\\Controller\\' => array($baseDir . '/src/controller'),
    'GFPDF\\' => array($baseDir . '/src'),
);
