<?php 

    $user = 'root';
    $password = 'root';
    $db = 'php-blog';
    $host = 'localhost';
    $port = 3306;

    
    // PDO + Mysql
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db  , $user, $password );

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL and bind parameters
    $stmt = $pdo->prepare("INSERT INTO test (id, user_id) VALUES (:id, :user_id)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':user_id', $user_id);

    // Insert a row
    // $id = 3;
    // $user_id = 5;
    // $stmt->execute();


    require_once "src/config.php";
    $content = new Collection();
    $title = "PHP Blog";
    require 'views/header.php';
    require 'views/footer.php';


  
 ?>