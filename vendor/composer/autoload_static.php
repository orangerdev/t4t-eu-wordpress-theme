<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54a98ab987acfa73e725569c1875827c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54a98ab987acfa73e725569c1875827c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54a98ab987acfa73e725569c1875827c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
