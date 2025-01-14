<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bb3ea1f2bb3c0725e25b2b784706968
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bb3ea1f2bb3c0725e25b2b784706968::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bb3ea1f2bb3c0725e25b2b784706968::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5bb3ea1f2bb3c0725e25b2b784706968::$classMap;

        }, null, ClassLoader::class);
    }
}
