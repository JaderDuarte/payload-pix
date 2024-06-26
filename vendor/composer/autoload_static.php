<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba4ee60951d5a231481dc7b584ea7cd2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba4ee60951d5a231481dc7b584ea7cd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba4ee60951d5a231481dc7b584ea7cd2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba4ee60951d5a231481dc7b584ea7cd2::$classMap;

        }, null, ClassLoader::class);
    }
}
