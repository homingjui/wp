<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit494cd03364c53535cfb56b4d9973a93e
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ecpay\\Sdk\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ecpay\\Sdk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit494cd03364c53535cfb56b4d9973a93e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit494cd03364c53535cfb56b4d9973a93e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit494cd03364c53535cfb56b4d9973a93e::$classMap;

        }, null, ClassLoader::class);
    }
}