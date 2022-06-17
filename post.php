<?php
class Post
{
    private static $instances = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Post
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function __get($name)
    {
        if (isset($_POST[$name])) {
            $item = $_POST[$name];
            if ($item == '') return null;
            $item = stripslashes($item);
            $item = htmlspecialchars($item);
            return trim($item);
        }
        return null;
    }
}