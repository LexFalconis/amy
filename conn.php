<?php

$conn = 'mysql:host=localhost;dbname=estudos';

try{
  $db = new PDO($conn, 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  if($e->getCode()==1049){
    echo "Banco err";
  }else{
    echo $e->getMessage();
  }
}