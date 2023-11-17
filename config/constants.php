<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define("ROOT_URL", $_ENV["ROOT_URL"]);
define("DB_HOST", $_ENV["DB_HOST"]);
define("DB_USER", $_ENV["DB_USER"]);
define("DB_PASS", $_ENV["DB_PASS"]);
define("DB_NAME", $_ENV["DB_NAME"]);
?>