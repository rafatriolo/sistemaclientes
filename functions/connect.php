<?php

function connect(){
   try {
      $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' , '');
      return $pdo;
   } catch (\Throwable $th) {
      throw $th;
   }
}


