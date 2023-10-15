<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72d019f37844eb7b925544d3f87237b3
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Esteban\\Facturacion\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Esteban\\Facturacion\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit72d019f37844eb7b925544d3f87237b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72d019f37844eb7b925544d3f87237b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit72d019f37844eb7b925544d3f87237b3::$classMap;

        }, null, ClassLoader::class);
    }
}