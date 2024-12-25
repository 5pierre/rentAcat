<?php
include_once 'bdd.php';


class catModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    
    public function getcats()
    {
        return $this->bdd->query("SELECT * FROM cats")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getcatById($id)
    {
        $getcat = $this->bdd->prepare("SELECT * FROM cats WHERE id_cat = ?");
        $getcat->execute([$id]);
        return $getcat->fetch(PDO::FETCH_ASSOC);      

    }

    
}