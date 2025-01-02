<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite61e197ddcc2d3af59c23c9db7e0444b
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite61e197ddcc2d3af59c23c9db7e0444b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite61e197ddcc2d3af59c23c9db7e0444b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite61e197ddcc2d3af59c23c9db7e0444b::$classMap;

        }, null, ClassLoader::class);
    }
}