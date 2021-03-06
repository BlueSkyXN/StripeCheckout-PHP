<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc45793bbef70d00ebc9c461993fc1b59
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc45793bbef70d00ebc9c461993fc1b59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc45793bbef70d00ebc9c461993fc1b59::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
