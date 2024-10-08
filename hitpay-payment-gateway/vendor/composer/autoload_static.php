<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a7e2497cc6f77dc9a55e3abf95fd6ad
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HitPay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HitPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/softbuild/hitpay-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a7e2497cc6f77dc9a55e3abf95fd6ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a7e2497cc6f77dc9a55e3abf95fd6ad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
