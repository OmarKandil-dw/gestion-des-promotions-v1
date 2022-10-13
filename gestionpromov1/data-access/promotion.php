<?php

class promotion {

    private $id;
    private $nom;


    public function setid($id_promotion){
    $this->id = $id_promotion;
    }
    
    public function getid(){
        return $this->id;
    }

    public function setnom($nom){
        $this->nom = $nom;
    }

    public function getnom(){
        return $this->nom;
    }


}

?> 