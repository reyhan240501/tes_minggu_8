<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit537dd5073da4086b286e55d1d9fa6794
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit537dd5073da4086b286e55d1d9fa6794::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit537dd5073da4086b286e55d1d9fa6794::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
