<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fb1d8edbb2bced0e2d7fe89c15eba2a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fb1d8edbb2bced0e2d7fe89c15eba2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fb1d8edbb2bced0e2d7fe89c15eba2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
