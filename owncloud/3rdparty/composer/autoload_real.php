<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2f23f73bc0cc116b4b1eee1521aa8652
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit2f23f73bc0cc116b4b1eee1521aa8652', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit2f23f73bc0cc116b4b1eee1521aa8652', 'loadClassLoader'));

        $includePaths = require __DIR__ . '/include_paths.php';
        array_push($includePaths, get_include_path());
        set_include_path(join(PATH_SEPARATOR, $includePaths));

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire2f23f73bc0cc116b4b1eee1521aa8652($fileIdentifier, $file);
        }

        return $loader;
    }
}

function composerRequire2f23f73bc0cc116b4b1eee1521aa8652($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}