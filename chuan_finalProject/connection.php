<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 1:46 PM
 */

class Db{
    private static $instance = NULL;

    private static $dbhost = "localhost";
    private static $dbname = "star_wars";
    private static $dbuser = "adminAustin";
    private static $dbpass = "pass";

    /**
     * Db constructor.
     */
    private function __construct(){}

    private function __clone(){}

    /**
     * @return null|PDO
     */
    public static function getInstance()
    {

        if(!isset(self::$instance)){
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='. self::$dbhost .';dbname='. self::$dbname, self::$dbuser, self::$dbpass);
        }
        return self::$instance;
    }

}