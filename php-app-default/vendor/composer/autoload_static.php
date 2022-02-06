<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita189edab4c582ac6770e0b5b857b0f42
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita189edab4c582ac6770e0b5b857b0f42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita189edab4c582ac6770e0b5b857b0f42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita189edab4c582ac6770e0b5b857b0f42::$classMap;

        }, null, ClassLoader::class);
    }
}