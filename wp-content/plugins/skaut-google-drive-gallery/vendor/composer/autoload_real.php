<?php

namespace Sgdg\Vendor;

// autoload_real.php @generated by Composer
class ComposerAutoloaderInit52e8373b634a15ad0df2f43d939433e6
{
    private static $loader;
    public static function loadClassLoader($class)
    {
        if ('Sgdg\\Vendor\\Composer\\Autoload\\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }
    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }
        require __DIR__ . '/platform_check.php';
        \spl_autoload_register(array('Sgdg\\Vendor\\ComposerAutoloaderInit52e8373b634a15ad0df2f43d939433e6', 'loadClassLoader'), \true, \true);
        self::$loader = $loader = new \Sgdg\Vendor\Composer\Autoload\ClassLoader(\dirname(__DIR__));
        \spl_autoload_unregister(array('Sgdg\\Vendor\\ComposerAutoloaderInit52e8373b634a15ad0df2f43d939433e6', 'loadClassLoader'));
        require __DIR__ . '/autoload_static.php';
        \call_user_func(\Sgdg\Vendor\Composer\Autoload\ComposerStaticInit52e8373b634a15ad0df2f43d939433e6::getInitializer($loader));
        $loader->register(\true);
        $filesToLoad = \Sgdg\Vendor\Composer\Autoload\ComposerStaticInit52e8373b634a15ad0df2f43d939433e6::$files;
        $requireFile = \Closure::bind(static function ($fileIdentifier, $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = \true;
                require $file;
            }
        }, null, null);
        foreach ($filesToLoad as $fileIdentifier => $file) {
            $requireFile($fileIdentifier, $file);
        }
        return $loader;
    }
}