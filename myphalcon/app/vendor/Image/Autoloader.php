<?php

namespace Image;

/**
 * 图片 压缩水印 来自thinkphp
 */
class Autoloader
{
    private $directory;
    private $prefix;
    private $prefixLength;

    public function __construct($baseDirectory = __DIR__)
    {
        $this->directory = $baseDirectory;
        $this->prefix = __NAMESPACE__.'\\';
        $this->prefixLength = strlen($this->prefix);
    }

    public static function register($prepend = false)
    {
        spl_autoload_register(array(new self(), 'autoload'), true, $prepend);
    }

    public function autoload($className)
    {
        if (0 === strpos($className, $this->prefix)) {
            $parts = explode('\\', substr($className, $this->prefixLength));
            $filepath = $this->directory.DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR, $parts).'.class.php';

            if (is_file($filepath)) {
                require $filepath;
            }
        }
    }
}
