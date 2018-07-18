<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a92f0311190cf6005243b1b9002e7f3
{
    public static $files = array (
        '9bb8044c203cceb039ab3dd1133f206e' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vaptcha\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/vaptcha/vaptcha-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a92f0311190cf6005243b1b9002e7f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a92f0311190cf6005243b1b9002e7f3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}