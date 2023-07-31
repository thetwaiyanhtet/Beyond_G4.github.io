<?php

$hostname = "mysql-db-do-user-14242552-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "beyond_db";
$uname = "doadmin";
$pwd = "AVNS_8znaub1DRoUGMbF6KKE";

//Connection
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname",
    $uname,
    $pwd
);

// set error exc
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
