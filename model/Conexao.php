<?php

class Conexao
{
    private static $conexao;

    private function __construct()
    {
    }

    public static function getInstancia()
    {
        if (!isset(self::$conexao)) {
            self::$conexao = pg_connect("host=pg-bd dbname=per user=admin password=admin");

            return self::$conexao;
        } else {
            return self::$conexao;
        }
    }
}
