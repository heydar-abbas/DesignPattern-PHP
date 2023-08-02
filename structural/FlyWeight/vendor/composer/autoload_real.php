<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderIniteb5a743ed13fc5261b0742ecb5105df6
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

        spl_autoload_register(array('ComposerAutoloaderIniteb5a743ed13fc5261b0742ecb5105df6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderIniteb5a743ed13fc5261b0742ecb5105df6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticIniteb5a743ed13fc5261b0742ecb5105df6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}