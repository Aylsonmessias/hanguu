<?php



$conn = new PDO('mysql:dbname=hanguu;host=127.0.0.1', 'admin', 'admin');

$conn->exec('



            CREATE TABLE pedido_pivo ' .
            '(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, id_usuario VARCHAR(50))
            
            
            ');
$sth = $conn->prepare('INSERT INTO pedido_pivo (id_usuario) VALUES (:name)');
$sth->execute([':name' => 'foo']);
var_dump($conn->lastInsertId());
