<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit588632eaa028571c74fe0298550692db
{
    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit588632eaa028571c74fe0298550692db::$classMap;

        }, null, ClassLoader::class);
    }
}