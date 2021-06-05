<?php
require "index.php";
require "header.php";
$json = array('error' => true);
if(isset($_GET['id'])){
    $product = $DB->query('SELECT numMenu FROM menu WHERE numMenu = :id', array('id'  => $_GET['id']));
    if(empty($product)){
        $json['message'] = "Ce produit n'éxiste pas !";
    }
    $panier->add($product[0]->numMenu);
    $json['error'] = false;
    $json['message'] = 'Le produit a ete bien ajouter a votre panier';
}else{
    $json['message'] = "Vous n'avez pas ajouter de produit au panier !";
}
echo json_encode($json);
?>