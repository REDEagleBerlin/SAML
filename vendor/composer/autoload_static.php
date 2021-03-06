<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited2a6ed7efdfce014b686f2ae73d9d24
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RobRichards\\XMLSecLibs\\' => 23,
        ),
        'O' => 
        array (
            'OneLogin\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RobRichards\\XMLSecLibs\\' => 
        array (
            0 => __DIR__ . '/..' . '/robrichards/xmlseclibs/src',
        ),
        'OneLogin\\' => 
        array (
            0 => __DIR__ . '/..' . '/onelogin/php-saml/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited2a6ed7efdfce014b686f2ae73d9d24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited2a6ed7efdfce014b686f2ae73d9d24::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
