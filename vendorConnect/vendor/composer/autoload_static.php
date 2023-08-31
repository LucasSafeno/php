<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6320b7311fe7379cabc89e0ba304999f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6320b7311fe7379cabc89e0ba304999f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6320b7311fe7379cabc89e0ba304999f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6320b7311fe7379cabc89e0ba304999f::$classMap;

        }, null, ClassLoader::class);
    }
}