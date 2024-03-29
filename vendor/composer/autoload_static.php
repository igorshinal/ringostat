<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bd742618ec90a998787360411a94829
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpOption\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpoption/phpoption/src',
            ),
        ),
    );

    public static $classMap = array (
        'Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'Controllers\\Currency' => __DIR__ . '/../..' . '/app/Controllers/Currency.php',
        'Controllers\\Home' => __DIR__ . '/../..' . '/app/Controllers/Home.php',
        'Database\\Singleton' => __DIR__ . '/../..' . '/app/Database/Singleton.php',
        'Models\\Query' => __DIR__ . '/../..' . '/app/Models/Query.php',
        'Route\\Route' => __DIR__ . '/../..' . '/app/Route/Route.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bd742618ec90a998787360411a94829::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bd742618ec90a998787360411a94829::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6bd742618ec90a998787360411a94829::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6bd742618ec90a998787360411a94829::$classMap;

        }, null, ClassLoader::class);
    }
}
