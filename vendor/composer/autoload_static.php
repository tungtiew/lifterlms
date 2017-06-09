<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0987ab0b066ae57faf13d76edb53ffc
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0987ab0b066ae57faf13d76edb53ffc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0987ab0b066ae57faf13d76edb53ffc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
