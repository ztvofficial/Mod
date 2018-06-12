<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit546b6ef04f2a1095bc634f03f9ca2e9a
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\I18n\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Library\\' => 8,
        ),
        'J' => 
        array (
            'Johncms\\' => 8,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\I18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-i18n/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Library\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/library/classes',
        ),
        'Johncms\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/system/johncms',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'GeSHi' => __DIR__ . '/..' . '/geshi/geshi/src/geshi.php',
        'upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit546b6ef04f2a1095bc634f03f9ca2e9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit546b6ef04f2a1095bc634f03f9ca2e9a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit546b6ef04f2a1095bc634f03f9ca2e9a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit546b6ef04f2a1095bc634f03f9ca2e9a::$classMap;

        }, null, ClassLoader::class);
    }
}