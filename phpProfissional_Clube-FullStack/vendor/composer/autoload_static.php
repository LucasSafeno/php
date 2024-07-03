<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb0ad3e08b591f81d6bd66fa0841277f
{
    public static $files = array (
        'fc9563afec323223d4ad5ca08b414b5f' => __DIR__ . '/../..' . '/app/helpers/constantes.php',
        'a04223361f9684d048f23a4ebed1b592' => __DIR__ . '/../..' . '/app/router/router.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb0ad3e08b591f81d6bd66fa0841277f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb0ad3e08b591f81d6bd66fa0841277f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb0ad3e08b591f81d6bd66fa0841277f::$classMap;

        }, null, ClassLoader::class);
    }
}