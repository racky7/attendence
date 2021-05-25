<?php

    // Development Connection
    // $host = '127.0.0.1';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    // Remote Database Connection
                
    $host = 'remotemysql.com';
    $db = 'BMFc0Id63X';
    $user = 'BMFc0Id63X';
    $pass = 'CV8pGiSS72';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }   catch(PDOException $e) {
       echo "<h1 class='text-danger'>No Database Found</h1>";
        
       // throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo = new PDO($dsn, $user, $pass));
    $user = new user($pdo);

    $user->insertUser("admin","password");

?>