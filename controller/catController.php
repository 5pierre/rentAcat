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
            $cats = $this->model->getcats();
            include_once 'view/rentAcat.php';
            
        }
        else 
        {
            include_once 'view/usernonlogee.php';

        }

    }


    }








