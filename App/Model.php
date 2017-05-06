<?php

namespace App;

class Model
{
    
    const TABLE = '';

    public static function findAll()
    {
        $db = new \App\Db();
        $data = $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
        return $data;
    }
    
}