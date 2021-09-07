<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c16e9c93d5d535149bcb8002c3fefd8
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ezequieldhonatan\\MicroservicesCommon\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ezequieldhonatan\\MicroservicesCommon\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c16e9c93d5d535149bcb8002c3fefd8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c16e9c93d5d535149bcb8002c3fefd8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c16e9c93d5d535149bcb8002c3fefd8::$classMap;

        }, null, ClassLoader::class);
    }
}
