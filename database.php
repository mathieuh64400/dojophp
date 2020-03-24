<?php
class Database 
{
private static $dbName = 'dojobdd'; 
private static $dbHost = 'localhost';
private static $dbUsername = 'phpmyadmin';
private static $dbUserPassword = 'bddmyadmin';

private static $cont = null;

public function __construct() {
die('Fonction Init non autorisée');
}

public static function connect() {

if ( null == self::$cont )
{
  try
  {
    self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
  }
  catch(PDOException $e)
  {
    die($e->getMessage());
  }
} 
return self::$cont;
}

public static function disconnect()
{
self::$cont = null;
}
}