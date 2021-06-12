<?php
function criarPedido($id)
{
    $conn = new PDO('mysql:dbname=hanguu;host=127.0.0.1', 'root', '');

    $sth = $conn->prepare('INSERT INTO pedido_pivo (id_usuario, andamento) VALUES (:id, :a)');
    $sth->execute([':id' => $id, ":a"=>0]);
    return $conn->lastInsertId();
}
function salvarPedido($informacoes) {

    
    
 
   
    $sql = "INSERT INTO pedido SET total = ?, id_produto = ?, quantidade = ?, id_pedido = ?";
    $stmt = Conexao::getConn()->prepare($sql);
 
    return $stmt->execute($informacoes);
   
}


function all() {
    $sql = "SELECT * FROM pedido_pivo";
    $stmt = Conexao::getConn()->query($sql);
    return $stmt->fetchAll();
}

function getPedidos()
{
    try {
    $id = $_SESSION['user_login'];
    $sql = "SELECT * FROM pedido_pivo where id_usuario = '$id' ";
    $stmt = Conexao::getConn()->query($sql);
    return $stmt->fetchAll();
    } catch(\PDOException $e) {
        echo $e->getMessage();
        exit();
    }

}


function allLucro() {
    $sql = "SELECT * FROM pedido inner join pedido_pivo on  pedido.id_pedido = pedido_pivo.id where pedido_pivo.andamento = '1'";
    $stmt = Conexao::getConn()->query($sql);
    return $stmt->fetchAll();
}

function getPedidoId($id)
{
   // $sql = "SELECT * FROM pedido where id = '$id' inner join pedido on pedido_pivo.id = pedido.id_pedido inner join produtos on pedido.id_produto = produtos.id";
    $sql = "SELECT * FROM pedido inner join produtos on pedido.id_produto = produtos.id inner join pedido_pivo on  pedido.id_pedido = pedido_pivo.id where id_pedido = '$id'";
    $stmt = Conexao::getConn()->query($sql);

    return $stmt->fetchAll();

}


function entregar($id) {
    $sql = "UPDATE pedido_pivo SET andamento = '1' where id='$id'";
    $stmt = Conexao::getConn()->query($sql);
}

