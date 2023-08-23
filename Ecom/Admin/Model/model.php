<?php

$hostname = "hosting-beyond-do-user-14484910-0.b.db.ondigitalocean.com";
$port = 25060;
$dbname = "beyond_db";
$uname = "doadmin";
$pwd = "AVNS_odSp7G5IWykGCI5O0CB";

//Connection
$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname",
    $uname,$pwd);

// set error exc
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

