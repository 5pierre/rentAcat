<?php
include_once 'model/catModel.php';


class catController
{
    private $model;

    public function __construct()
    {
        $this->model = new catModel;
    }
    public function gestioncats()
    {


        if (!$_SESSION['user']['logged_in'] === false) {

            if (isset($_GET['page']) && $_GET['page'] === 'cat' && isset($_GET['id'])) 
            {   
                $cat = $this->model->getcatById($_GET['id']);
                include_once 'view/catprofil.php';
            } 
            else 
            {
                $cats = $this->model->getcats();
                include_once 'view/rentAcat.php';
            }


        }
        else 
        {
            include_once 'view/usernonlogee.php';

        }

    }


    }








