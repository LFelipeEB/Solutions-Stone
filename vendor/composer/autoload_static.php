<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitecc664d39a89621e7a3af07fbcbe2a4b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitecc664d39a89621e7a3af07fbcbe2a4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitecc664d39a89621e7a3af07fbcbe2a4b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
