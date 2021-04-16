<?php
namespace App\models;

use App\orm\mysql\OrmWithMysql;

class Comment
{
    public static $table = 'comments';
    public static $point;
    public static $operator;
    public static $value;

    public static function all()
    {
        $data = new OrmWithMysql();

        return $data->selectAll(self::$table);
    }
    
    public static function where($point , $operator , $value)
    {
        self::$point = $point;
        self::$operator = $operator;
        self::$value = $value;

        return $data = new Comment();
    }

    public function get()
    {
        $data = new OrmWithMysql();
        $query = "select * from ".self::$table." where ".self::$point." ".self::$operator." ".self::$value;

        return $data->getByCondition($query);
    }

    public static function find($id)
    {
        $data = new OrmWithMysql();

        return $data->selectById(self::$table, $id);
    }

    public function blogs($id)
    {
        $data = new OrmWithMysql();

        return $data->belongsTo('blogs', 'comments', 'blogs', $id);
    }
}

?>

