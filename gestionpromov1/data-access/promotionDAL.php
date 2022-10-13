<?php 
    require_once"connection.php";
    require_once"promotion.php";

    class promotionDAL extends connection{

        public function insert($promotion){

            $addpromo = "INSERT INTO promotion(nom) VALUES('" . $promotion->getnom() . "')";
            $this->connect()->query($addpromo);            

        }

        public function update($promotion){
            $updatepromo = "UPDATE promotion SET nom = '".$promotion->get_nom()."' WHERE id_promotion = " . $promotion->get_id();
            $this->connect()->query($updatepromo);            

        }

      
    }
?> 