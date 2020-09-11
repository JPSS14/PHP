<?php



class Connect
{
    private const HOST = "localhost";
    private const USER = "root";
    private const PASSWORD = "";
    private const DB = "new_tcc";

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=".self::HOST.";dbname=".self::DB,
                    self::USER,
                    self::PASSWORD,
                    self::OPTIONS
                );
            } catch (PDOException $exception) {
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }
        }
        return self::$instance;
    }

    final private function __construct()
    {
    }
    final private function __clone()
    {
    }
}
