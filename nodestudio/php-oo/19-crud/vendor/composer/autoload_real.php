<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd939509a1a6634cc5ab539ff9f5e1860
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

        spl_autoload_register(array('ComposerAutoloaderInitd939509a1a6634cc5ab539ff9f5e1860', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd939509a1a6634cc5ab539ff9f5e1860', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd939509a1a6634cc5ab539ff9f5e1860::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}