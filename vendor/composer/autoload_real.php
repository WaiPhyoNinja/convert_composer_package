<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite83aac9668be2ac48707a6eba59b1bbe
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
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

        spl_autoload_register(array('ComposerAutoloaderInite83aac9668be2ac48707a6eba59b1bbe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite83aac9668be2ac48707a6eba59b1bbe', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite83aac9668be2ac48707a6eba59b1bbe::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
