<?php

    class panier{

        private $DB;

        public function __construct($DB){
            if(!isset($_SESSION)){
                session_start();
            }
            if(!isset($_SESSION['panier'])){
                $_SESSION['panier'] = array();
            }
            $this->DB = $DB;
        }

        public function add($product_id){
            if(isset($_SESSION['panier'][$product_id])){
                $_SESSION['panier'][$product_id]++;
            }else{
                $_SESSION['panier'][$product_id] = 1;
            }
        }

        public function del($product_id){
            unset($_SESSION['panier'][$product_id]);
        }

        public function total(){
            $total = 0;
            $mesId = array_keys($_SESSION['panier']);
            if(empty($mesId)){
                $products = array();
            }else{
                $products = $this->DB->query('SELECT numMenu, prix from menu WHERE numMenu IN ('.implode(',',$mesId).')');
            }
            foreach($products as $product){
                $total += $product->prix * $_SESSION['panier'][$product->numMenu];
            }
            return $total;
        }

    }

?>