<?php
$configfile = require_once "config.php";

$config = $configfile["database"];

$host = $config["host"];
$db = $config["name"];
$db_user = $config["username"];
$db_password = $config["password"];
$charset = "utf8mb4";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// dsn - data source name 

try {
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException(($e->getMessage()));
}

require_once "crud.php";
require_once "user.php";
$crud = new crud($pdo);
$user = new user($pdo);

$user->insertUser("admin", "admin");

?>
