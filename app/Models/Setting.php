<?php 

namespace App\Models;

use App\Libs\Config;

class Setting
{
    private static $DATA = [];

    public static function all()
    {
        return self::$DATA;
    }

    public static function add($setting)
    {
        $setting->id = count(self::$DATA) + 1;
        self::$DATA[] = $setting;
        self::save();
        return $setting;
    }

    public static function findById(int $id)
    {
        foreach (self::$DATA as $setting) {
            if ($setting->id === $id) {
                return $setting;
            }
        }
        return [];
    }

    public static function load()
    {
        $DB_PATH = Config::get('DB_PATH', __DIR__ . '/../Databases/Setting.json');
        self::$DATA = json_decode(file_get_contents($DB_PATH));
    }

    public static function save()
    {
        $DB_PATH = Config::get('DB_PATH', __DIR__ . '/../Databases/Setting.json');
        file_put_contents($DB_PATH, json_encode(self::$DATA, JSON_PRETTY_PRINT));
    }

}