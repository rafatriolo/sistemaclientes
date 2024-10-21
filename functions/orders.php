<?php

require 'connect.php';

function selectOrders(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM orders AS o JOIN clientes AS c JOIN products AS p WHERE o.client_id = c.client_id AND o.product_id = p.product_id");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}