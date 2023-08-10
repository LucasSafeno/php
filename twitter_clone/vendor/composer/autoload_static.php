<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6932a5d2b2f970f1963dd8176824ddf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6932a5d2b2f970f1963dd8176824ddf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6932a5d2b2f970f1963dd8176824ddf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita6932a5d2b2f970f1963dd8176824ddf::$classMap;

        }, null, ClassLoader::class);
    }
}
