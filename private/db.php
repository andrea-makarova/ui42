<?php

try{
  $dbUserName = 'root';
  $dbPassword = 'root'; 
  $dbConnection = 'mysql:host=localhost:8889; dbname=ui42-database; charset=utf8mb4'; 

  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // try-catch
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ 
  ];
  $db = new PDO(  $dbConnection, 
                  $dbUserName, 
                  $dbPassword , 
                  $options );
}catch(PDOException $ex){
  http_response_code(500);
  header('Content-Type: application/json');
  //echo $ex;
  echo '{"message":"Contact the system about error:'.__LINE__.'"}';
  exit();
}