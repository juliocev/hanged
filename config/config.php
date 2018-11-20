<?php

class Config
{
    public static function get($param)
    {
        $params = [
            'base_url' => 'localhost/hanged',
        ];

        return $params[$param];
    }
}
