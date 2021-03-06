<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8510674cb132750d543a01aca47111f7
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'line\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'line\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8510674cb132750d543a01aca47111f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8510674cb132750d543a01aca47111f7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
