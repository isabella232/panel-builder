<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf85c06cb6dbdcb9d93fbe856998b5993
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AttachmentHelper\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AttachmentHelper\\' => 
        array (
            0 => __DIR__ . '/..' . '/moderntribe/attachment-helper/AttachmentHelper',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf85c06cb6dbdcb9d93fbe856998b5993::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf85c06cb6dbdcb9d93fbe856998b5993::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
