<?php


//          if  get page                            else
$page = isset($_GET['page']) ? $_GET['page'] : 'acceuil';

switch($page)
{
    case 'acceuil':
        include_once 'view/acceuil.php';
        break;

    case 'cat':
        include_once 'controller/catController.php';
        $users = new catController;
        $users->gestionlogincat();
        break;

    case 'login':
        include_once 'controller/usersController.php';
        $users = new usersController;
        $users->gestionRequest();
        break;

    case 'contact':
        include_once 'view/contact.php';
        break;   

    case 'faq':
        include_once 'view/faq.php';
        break;   

    default :
    include 'view/404.php';
}