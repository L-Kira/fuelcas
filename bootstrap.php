<?php
Autoloader::add_core_namespace('Cas');

Autoloader::add_classes(array(
'Cas\\Cas' => __DIR__.'/classes/cas.php',
'Cas\\Cas' => __DIR__.'/classes/cas/cas.php',

/**
 * CAS exceptions
 */
'cas\\CasConfigError' => __DIR__.'/classes/cas/cas.php',
));
