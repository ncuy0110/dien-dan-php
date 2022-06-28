<?php

abstract class DB
{
    private static $instance = NULl;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                $DB_NAME = 'demo';
                $DB_USERNAME = 'root';
                $DB_PASSWORD = 'uy050770';
                self::$instance = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USERNAME, $DB_PASSWORD);
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}