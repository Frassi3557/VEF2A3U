<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb854a00c3b335291dd33bbcaf478692b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb854a00c3b335291dd33bbcaf478692b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb854a00c3b335291dd33bbcaf478692b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
