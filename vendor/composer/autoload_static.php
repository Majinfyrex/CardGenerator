<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19a838f4132d3a1265ebc7ed3fdcdb9a
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zakary\\Poo\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zakary\\Poo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit19a838f4132d3a1265ebc7ed3fdcdb9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19a838f4132d3a1265ebc7ed3fdcdb9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit19a838f4132d3a1265ebc7ed3fdcdb9a::$classMap;

        }, null, ClassLoader::class);
    }
}