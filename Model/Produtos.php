<?php

function getProdutos($ids)
{
    $ids = array_unique($ids);
    $in  = str_repeat('?,', count($ids) - 1) . '?';
        $sql = "SELECT * FROM produtos where id IN($in)";
   

        $stmt = Conexao::getConn()->prepare($sql);


        $stmt->execute(array_values($ids));
        $my_results = $stmt->fetchAll();

        return $my_results;

}

