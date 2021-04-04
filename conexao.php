<?php
//conexão banco de dados
function connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db       = "hanguu";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "CREATE DATABASE myDBPDO";
          // use exec() because no results are returned
          return  $conn;

      } catch (PDOException $e){
        echo "conexão falhou:"  . $e->getMessage();

   }
    


  }
?>