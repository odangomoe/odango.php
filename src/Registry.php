<?php

namespace Odango\OdangoPhp;

class Registry {
    protected static $stash;
    protected static $database;
    protected static $nyaa;

    public static function setStash($stash)
    {
        static::$stash = $stash;
    }

    public static function getStash()
    {
        return static::$stash;
    }

    public static function setDatabase($database)
    {
        static::$database = $database;
    }

    public static function getDatabase()
    {
        return static::$database;
    }

    public static function getNyaa()
    {
        return static::$nyaa;
    }

    public static function setNyaa($nyaa)
    {
        static::$nyaa = $nyaa;
    }
}
