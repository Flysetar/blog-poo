<?php

//database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog');
define('DB_HOST', '5432');
define('DB_USER', 'root');
define('DB_PASS', 'root');

$db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once 'functions.php';
