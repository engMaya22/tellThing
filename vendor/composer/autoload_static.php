<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9f9305d947bfd327f50d5956467ac76
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luci\\Tpack\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luci\\Tpack\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite9f9305d947bfd327f50d5956467ac76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9f9305d947bfd327f50d5956467ac76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9f9305d947bfd327f50d5956467ac76::$classMap;

        }, null, ClassLoader::class);
    }
}
