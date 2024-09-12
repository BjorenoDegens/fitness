<?php
 /** @var PDO $connect */
$host = getenv('HOST');
$db = getenv('DATABASENAME');
$user = getenv('USERNAME');
$pass = getenv('PASSWORD');
$charset = 'utf8mb4';

$dns = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $connect = new PDO($dns, $user, $pass, $opt);
}
catch (PDOException $e)
{
    die($e->getMessage());
}
  echo"Database is connected";