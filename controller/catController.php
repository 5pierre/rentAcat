<?php
include_once 'model/catModel.php';


class catController
{
    private $model;

    public function __construct()
    {
        $this->model = new catModel;
    }
    public function gestionlogincat()
    {

        if (!$_SESSION['user']['logged_in'] === false) {

            // if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            // {
            //     $msg = $_POST['message'] ;

            //     if($this->model->addmessage($_SESSION['user']['name'],$msg))
            //     {
            //         echo "envoie du message ok";
            //         header("Location: ?page=guestbook");
    
            //     }
            // }
            // else
            // {
            //     $message = $this->model->getmessage();
            //     include_once 'view/rentAcat.php';
            // }
            include_once 'view/rentAcat.php';
        }
        else 
        {
            include_once 'view/usernonlogee.php';

        }

    }


    }








