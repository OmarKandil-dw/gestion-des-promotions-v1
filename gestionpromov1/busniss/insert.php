<?php
    require '../data-access/promotionDAL.php';

    if(isset($_POST["addpromotion"])){
        $obj = new promotionDAL();
        $promotion = new promotion();
        $promotion->setnom($_POST["nom"]);
        $obj->insert($promotion);
    }
?>