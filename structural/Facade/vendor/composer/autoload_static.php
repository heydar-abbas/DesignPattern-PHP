<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5ab8218465c84ccb006ca8f945073b1
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5ab8218465c84ccb006ca8f945073b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5ab8218465c84ccb006ca8f945073b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb5ab8218465c84ccb006ca8f945073b1::$classMap;

        }, null, ClassLoader::class);
    }
}
