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
    
    // public function getmessage()
    // {
    //     $stmt = $this->bdd->prepare("SELECT * FROM messages ORDER BY created_at DESC"); // Préparation de la requête pour éviter les injections
    //     $stmt->execute(); // Exécution de la requête sans paramètres
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    // }

    // public function addmessage($username,$content)
    // {
    //     $admsg = $this->bdd->prepare("INSERT INTO messages(username,content) VALUES(?,?) ");
    //     return $admsg->execute([$username,$content]);
    // }


}