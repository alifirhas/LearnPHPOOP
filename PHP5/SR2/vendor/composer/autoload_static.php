<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabb3b3678e19c07b156fd8e1ddb8a860
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitabb3b3678e19c07b156fd8e1ddb8a860::$classMap;

        }, null, ClassLoader::class);
    }
}