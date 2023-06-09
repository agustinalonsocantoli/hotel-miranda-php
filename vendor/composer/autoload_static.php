<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88b94a83333a5edc1586392fd40773a5
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88b94a83333a5edc1586392fd40773a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88b94a83333a5edc1586392fd40773a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88b94a83333a5edc1586392fd40773a5::$classMap;

        }, null, ClassLoader::class);
    }
}
