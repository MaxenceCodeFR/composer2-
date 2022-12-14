<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca306b6e408b5db4d35a24e6b718aa0f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Comp\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Comp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitca306b6e408b5db4d35a24e6b718aa0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca306b6e408b5db4d35a24e6b718aa0f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca306b6e408b5db4d35a24e6b718aa0f::$classMap;

        }, null, ClassLoader::class);
    }
}
