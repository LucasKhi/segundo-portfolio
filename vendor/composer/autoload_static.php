<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb83064ef3b74ea4b4443d566197cda0e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb83064ef3b74ea4b4443d566197cda0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb83064ef3b74ea4b4443d566197cda0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb83064ef3b74ea4b4443d566197cda0e::$classMap;

        }, null, ClassLoader::class);
    }
}