<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\App' => $baseDir . '/app/Core/App.php',
    'App\\Controllers\\AdminController' => $baseDir . '/app/Controllers/AdminController.php',
    'App\\Controllers\\PostsController' => $baseDir . '/app/Controllers/PostsController.php',
    'App\\Models\\Admin' => $baseDir . '/app/Models/Admin.php',
    'App\\Models\\Post' => $baseDir . '/app/Models/Post.php',
    'App\\Request' => $baseDir . '/app/Core/Request.php',
    'App\\Router' => $baseDir . '/app/Core/Router.php',
    'ComposerAutoloaderInitd751713988987e9331980363e24189ce' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInitd751713988987e9331980363e24189ce' => $vendorDir . '/composer/autoload_static.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'CreateTable' => $baseDir . '/database/migrations/CreateTable.php',
    'Database\\Connection' => $baseDir . '/database/Connection.php',
);
