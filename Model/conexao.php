<?php
session_start();
// METODO RESPOSAVEL POR FAZER A CONEXÃO COM O BANCO
class Conexao
{

    const HOST = 'localhost';
    const NAME = 'hanguu';
    const USER = 'root';
    const PASS = '';

    public static $connect;

    public static function getConn()
    {
        try {
            self::$connect = new \PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME . ';charset=utf8', self::USER, self::PASS);
            return self::$connect;
        } catch (\PDOException $e) {
            echo 'ERROR' . $e->getMessage();

        }
    }
}


