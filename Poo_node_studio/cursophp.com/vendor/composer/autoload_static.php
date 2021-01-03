<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit464ba5e75ee439bf551a95cc6b2c308b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit464ba5e75ee439bf551a95cc6b2c308b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit464ba5e75ee439bf551a95cc6b2c308b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit464ba5e75ee439bf551a95cc6b2c308b::$classMap;

        }, null, ClassLoader::class);
    }
}