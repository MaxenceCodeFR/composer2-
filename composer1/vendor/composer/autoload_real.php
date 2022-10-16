<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitca306b6e408b5db4d35a24e6b718aa0f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitca306b6e408b5db4d35a24e6b718aa0f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitca306b6e408b5db4d35a24e6b718aa0f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitca306b6e408b5db4d35a24e6b718aa0f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}