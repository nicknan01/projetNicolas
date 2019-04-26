<?php
class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "manux";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";
    private static $connection = null;
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword,array(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING)); 
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    public static function disconnect()
    {
        self::$connection = null;
    }
}
?>
