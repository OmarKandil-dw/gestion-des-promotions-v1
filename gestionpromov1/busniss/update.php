<?php
    require '../data-access/promotionManager.php';
    require '../data-access/promotion.php';
    if(isset($_POST["editpromotion"])){
        $obj = new promotionDAL();
        $promotion = new promotion();
        $promotion->setid($_POST["id_promotion"]);
        $promotion->setnom($_POST["nom"]);
        $obj->update($promotion);
    }
?>